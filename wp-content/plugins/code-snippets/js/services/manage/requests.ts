import { isNetworkAdmin } from '../../utils/general'
import type { Snippet, SnippetScope } from '../../types/Snippet'

export interface ResponseData<T = unknown> {
	success: boolean
	data?: T
}

export type SuccessCallback = (response: ResponseData) => void

const sendSnippetRequest = (query: string, onSuccess?: SuccessCallback) => {
	const request = new XMLHttpRequest()
	request.open('POST', window.ajaxurl, true)
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded charset=UTF-8')

	request.onload = () => {
		const success = 200
		const errorStart = 400
		if (success > request.status || errorStart <= request.status) {
			return
		}

		console.info(request.responseText)
		onSuccess?.(<ResponseData> JSON.parse(request.responseText))
	}

	request.send(query)
}

/**
 * Update the data of a given snippet using AJAX
 * @param field
 * @param row
 * @param snippet
 * @param successCallback
 */
export const updateSnippet = (field: keyof Snippet, row: Element, snippet: Partial<Snippet>, successCallback?: SuccessCallback) => {
	const nonce = <HTMLInputElement | null> document.getElementById('code_snippets_ajax_nonce')
	const columnId = row.querySelector('.column-id')

	if (!nonce || !columnId?.textContent || !parseInt(columnId.textContent, 10)) {
		return
	}

	snippet.id = parseInt(columnId.textContent, 10)
	snippet.shared_network = null !== /\bshared-network-snippet\b/.exec(row.className)
	snippet.network = snippet.shared_network || isNetworkAdmin()
	snippet.scope = <SnippetScope | null> row.getAttribute('data-snippet-scope') ?? snippet.scope

	const queryString = `action=update_code_snippet&_ajax_nonce=${nonce.value}&field=${field}&snippet=${JSON.stringify(snippet)}`
	sendSnippetRequest(queryString, successCallback)
}
