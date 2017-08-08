@extends ('base.layout')

@section('content')
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Verzoekjes vrijdag</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                           for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="fixed-header-drawer-exp">
                    </div>
                </div>

                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <li class="mdl-menu__item">Remove user</li>
                    <li class="mdl-menu__item">Share</li>
                    <li disabled class="mdl-menu__item">Item #3</li>
                    <li class="mdl-menu__item">Item #4</li>
                </ul>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <iframe width="560" height="400" src="https://www.youtube.com/embed/VZYp7eM8UNY" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col">
                        <h3>Coming up!</h3>
                        <ul class="demo-list-three mdl-list">
                            <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                    <img class="mdl-list__item-avatar" src="https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBQZfoSOXTWVau7H6ztlvfGyeB9nQ" height="40" width="40" />
                                <span>Rick Astley</span>
                                    <span class="mdl-list__item-text-body">
                                    Never gonna give you up
                                        <div class="">Added by xyz</div>
                                    </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                    <img class="mdl-list__item-avatar" src="https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBQZfoSOXTWVau7H6ztlvfGyeB9nQ" height="40" width="40" />
                                <span>Rick Astley</span>
                                    <span class="mdl-list__item-text-body">
                                    Never gonna give you up
                                        <div class="">Added by xyz</div>
                                    </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                    <img class="mdl-list__item-avatar" src="https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBQZfoSOXTWVau7H6ztlvfGyeB9nQ" height="40" width="40" />
                                <span>Rick Astley</span>
                                    <span class="mdl-list__item-text-body">
                                    Never gonna give you up
                                        <div class="">Added by xyz</div>
                                    </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection