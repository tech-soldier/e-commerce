@if(session('error'))

    <div class="alert alert-danger">

        {{ session('error') }}
    </div>

  @endif

  @if(session('success'))

  <div class="alert alert-success">

        {{ session('success') }}
    </div>

  @endif

  @if($errors->any())

  <div class="alert alert-danger">

        Please review and make correction before you submit.

    </div>

  @endif