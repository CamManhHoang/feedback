<div class="form-group">
    <label for="name" class="col-md-3 control-label">Session Name</label>
    <div class="col-md-8">
        <input type="text" id="name" class="form-control" name="name" value="{{ $session->name or ''}}">
    </div>
</div>

<div class="form-group">
    <label for="office_number" class="col-md-3 control-label"></label>
    <div class="col-md-8">
        <input type="text" id="office_number" class="form-control" name="office_number" value="{{ $department->office_number or '' }}">
    </div>
</div>