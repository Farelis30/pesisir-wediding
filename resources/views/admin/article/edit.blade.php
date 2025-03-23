<x-layouts.admin>
    @section('title', 'Edit Artikel')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Artikel') }}
            </h2>
            <a href="{{ route('admin.articles.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @livewire('admin.article.edit-article', ['articleId' => $articleId])
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('markdownEditor', () => ({
                insertMarkdown(tag, defaultText = '') {
                    const textarea = document.getElementById('content');
                    const start = textarea.selectionStart;
                    const end = textarea.selectionEnd;
                    const text = textarea.value;
                    const selectedText = text.substring(start, end);

                    let insertText = '';
                    switch(tag) {
                        case 'bold':
                            insertText = `**${selectedText || 'bold text'}**`;
                            break;
                        case 'italic':
                            insertText = `*${selectedText || 'italic text'}*`;
                            break;
                        case 'heading':
                            insertText = `## ${selectedText || 'Heading'}`;
                            break;
                        case 'link':
                            insertText = `[${selectedText || 'link text'}](url)`;
                            break;
                        case 'image':
                            insertText = `![${selectedText || 'alt text'}](image_url)`;
                            break;
                        case 'code':
                            insertText = `\`\`\`\n${selectedText || 'code'}\n\`\`\``;
                            break;
                        case 'list':
                            insertText = `- ${selectedText || 'list item'}\n- another item`;
                            break;
                        case 'quote':
                            insertText = `> ${selectedText || 'quote'}`;
                            break;
                        default:
                            insertText = defaultText;
                    }

                    textarea.value = text.substring(0, start) + insertText + text.substring(end);

                    // Dispatch an input event to trigger Livewire's wire:model update
                    textarea.dispatchEvent(new Event('input', { bubbles: true }));

                    // Set cursor position
                    textarea.focus();
                    const newCursorPos = start + insertText.length;
                    textarea.setSelectionRange(newCursorPos, newCursorPos);
                }
            }));
        });

        window.addEventListener('thumbnail-deleted', event => {
            alert(event.detail.message);
        });
    </script>
</x-layouts.admin>
