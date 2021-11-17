$('#btnSubmit').click(function(e) {
    e.preventDefault();
    $('#resultLookup').remove();
    let code = $('#codeInput')[0].value;
    if(code.length) {
        $.get(`/api/reports/lookup?code=${code}`, function(response) {
            if(response.status) {
                $('#lookupContainer').append(`
                    <div id="resultLookup" class="mt-5 p-3 py-4 shadow-sm rounded-3">
                        <h4 class="mb-0">${response.data.title}</h4>
                        <p class=""><small class="text-secondary">Vào ngày ${response.data.created_at}</small></p>
                        <p class="">${response.data.record_makers}</p>
                        <p class="">${response.data.recorded}</p>
                        <p class="">${response.data.content}</p>
                    </div>
                `);
            }
        })
    }
});