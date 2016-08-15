$('#date').datetimepicker({
    format: 'YYYY-MM-DD',
    viewMode: 'days',
    useCurrent: false,
    minDate: moment().add(0, 'days')
});