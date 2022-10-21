<!-- Modal -->
<div class="modal fade" id="exampleModalEdit{{$c->id}}" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/edit/{{$c->id}}" method="POST">
        @csrf
        @method('patch')
      <div class="modal-body">
        <input type="text" name="name" value="{{$c->name}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-outline-primary">Save Change</button>
      </div>
    </form>
    </div>
  </div>
</div>