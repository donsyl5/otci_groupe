<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('deleteMetier') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="delete_id">
                <div>
                    <center>
                        <h3>!</h3>
                    </center>
                </div>

                <div class="modal-body">
                    <center>
                        <h3>Supprimer cet Elément?</h3>
                        <h6>Vous voulez supprimer cet élément!</h6>
                    </center>
                </div>
                <div class="row" style="margin-bottom: 50px; text-align: center;">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-danger btn-modal" data-bs-dismiss="modal">Annuler</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-modal">Supprimer</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>

