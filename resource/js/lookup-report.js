$(function() {
    var queryStr = window.location.search;
    const urlParams = new URLSearchParams(queryStr);

    if (urlParams.has('search') && urlParams.get('search')) {
        $('#codeInput').val(urlParams.get('search'));
        lookupReport(urlParams.get('search'));
    }

    $('#btnSubmit').click(function(e) {
        e.preventDefault();
        $('#resultLookup').remove();
        let code = $('#codeInput')[0].value;
        if(code.length) {
            urlParams.set('search', code);
            window.location.search = urlParams;
            lookupReport(code);
        }
    });

});

function lookupReport(code) {
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
