<div class="card-block">
    <div class="table-responsive">
        <table class=" cls_datatable_customers table table-striped table-bordered dataTable"  id="customer_table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Full Name</th>
                    <th>Points</th>                    
                    <th>Email</th>
                    <th style="text-align: center;">Action</i></th>
                </tr>
            </thead>
            <tbody id="customer_table">
            </tbody>
        </table>
        {{-- <div class="text-center">
            <a href="#!" class=" b-b-primary text-primary">View all Overdues</a>
        </div> --}}
    </div>
</div>

<script type="text/javascript">
    function loadCustomers()
    {
        var element = $('#customer_table');
        element.DataTable({
            "columnDefs": [
                  { "type": "numeric-comma", targets: 0 }
            ],
            cache:true,
          responsive: true,
          bProcessing: true,
          bServerSide: true,
          deferRender: true,
          select: true,
          stateSave: true,
          pageLength:50,
          colReorder : true,
            'ajax': {
                'url':'{{route("customers")}}',
                'type': 'POST',
                'data': {_token:token}
            },
            'columns': [
                {
                    name : 'count',
                    data : 'count'
                },
                {
                    name : 'id',
                    data : 'id'
                },
                {
                    name : 'name',
                    data : 'name'
                },
                {
                    name : 'points',
                    data : 'points'
                },                
                {
                    name : 'email',
                    data : 'email'
                },                                        
                {
                    name : 'action',
                    data : 'action'
                },
            ],
        });
    }
    $(document).ready(function() {
        loadCustomers();
    });

 
</script>