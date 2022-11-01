function deleteReport(id)
{
    $.ajax({
        type: "POST",
        url: 'reports/delete',
        data: {id: id},
        success: () => {
            $(`[report-id=${id}]`).remove();
        },
    });
}
