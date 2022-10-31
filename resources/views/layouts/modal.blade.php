<div id="donation" class="modal fade">
    <div class="modal-dialog modal-md">
        <form action="/donnation" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Modifier un produit")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="amount" value="200">
                    <button type="submit" class="btn btn-danger">Payer</button>
                </div>
            </div>
        </form>
    </div>
</div>
