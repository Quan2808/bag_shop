<div class="mb-3">
    <!-- Button trigger modal -->
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-link" data-mdb-toggle="modal" data-mdb-target="#changeName">
            Change Name
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changeName" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Change Name</h5>
                </div>

                <form method="POST" action="{{ route('auth.changeName') }}">

                    @csrf

                    <div class="modal-body">

                        <p class="">
                            <label class="fw-bold">Current Name:</label> {{ $customer->customer_name }}
                        </p>

                        <div class="form-group">
                            <label for="name">New Name</label>
                            <input type="type" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" minlength="6" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
