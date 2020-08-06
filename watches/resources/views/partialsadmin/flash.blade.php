  @if(session('error'))

    <div class="alert alert-danger  my-4">

      {{session('error')}}

    </div>

  @endif

  @if(session('success'))

    <div class="alert alert-success  my-4">

      {{session('success')}}

    </div>

  @endif

  @if($errors->any()) <!--if there is any errors, returns true of false, output-->

    <div class="alert alert-danger  my-4">

      Please review and correct form submission.

    </div>

  @endif