<div class="my-3">
    <input type="text" name="daterange" id="" class="form-control"  wire:model.lazy='filter_date' />

</div>


@push('custom_script')
<script>
$(function() {
    //    livewire.emit('exportSelectedQuery', 'foooo');
  $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    format: 'YYYY-MM-DD',
    ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
  }, function(start, end, label) {
    let startDate = start.format('YYYY-MM-DD');
    let endDate = end.format('YYYY-MM-DD')
    // if(start != null && end != null){
        let date = startDate+"-"+endDate

    @this.set('startDate', startDate);
    @this.set('endDate', endDate);
    // @this.set('endDate', end.format('YYYY-MM-DD'));
    // }
    // console.log("A new date selection was made: "+date+"----" + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });

  $('#daterange').on('apply.daterangepicker', function(ev, picker) {

    //  @this.set('startDate', picker.startDate.format('YYYY-MM-DD'));
    //  @this.set('endDate', picker.endDate.format('YYYY-MM-DD'));
     Livewire.emit('applyDate',picker)
//   console.log(picker.startDate.format('YYYY-MM-DD'));
//   console.log(picker.endDate.format('YYYY-MM-DD'));
});
});
</script>
@endpush
