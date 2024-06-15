<!DOCTYPE html>
<html lang="en">

@include( 'layout.sections.head' )

    <body>

        @include( 'layout.sections.navbar' )
        <div class="row m-1">

            @include( 'layout.sections.aside' )
            <div class="content-wrapper col-10">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

        @include( 'layout.sections.scripts' )
    </body>
</html>
