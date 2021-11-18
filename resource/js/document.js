function deleteDocument(id)
{
    $.ajax({
        type: "POST",
        url: 'document/delete',
        data: {id: id},
        success: res => {
            $(`[document-id=${id}]`).remove();
        },
    });
}