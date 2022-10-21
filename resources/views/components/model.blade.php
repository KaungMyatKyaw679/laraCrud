<!-- Modal -->
<div class="modal fade" id="exampleModal{{$c->id}}" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Danger!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="red-500">"{{$c->name}}" will be permanently deleted form database!</h5>
      </div>
      <div class="modal-footer">
        <h4>Are you sure to delete "{{$c->name}}"  ?</h4><hr>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
        <form action="/delete/{{$c->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>