<div class="mb-3">
    <!-- Button trigger modal -->
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-link" data-mdb-toggle="modal" data-mdb-target="#changePassword">
            Change Password
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changePassword" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Change Password</h5>
                </div>

                <form method="POST" action="{{ route('auth.changePassword') }}">

                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password" name="current_password" required>
                        </div>

                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                id="new_password" name="new_password" minlength="6" required>
                            <div class="col-auto">
                                <span id="textExample2" class="form-text"> Must be more than 6 characters. </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>
                            <input type="password"
                                class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                id="new_password_confirmation" name="new_password_confirmation" minlength="6" required>
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
