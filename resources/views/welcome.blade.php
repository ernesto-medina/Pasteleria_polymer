<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bower_components/webcomponentsjs/webcomponents.js"></script>
        <link rel="import" href="bower_components/paper-styles/paper-styles-classes.html">
        <link rel="import" href="bower_components/paper-material/paper-material.html">
        <link rel="import"  href="bower_components/polymer/polymer.html">
        <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html">
        <link rel="import" href="bower_components/paper-drawer-panel/paper-drawer-panel.html">
        <link rel="import" href="bower_components/paper-scroll-header-panel/paper-scroll-header-panel.html">
        <link rel="import" href="bower_components/paper-menu/paper-menu.html">
        <link rel="import" href="bower_components/iron-flex-layout/classes/iron-flex-layout.html">
        <link rel="import" href="bower_components/iron-icons/iron-icons.html">
        <link rel="import" href="bower_components/iron-pages/iron-pages.html">
        <link rel="import" href="bower_components/iron-selector/iron-selector.html">
        <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
        <link rel="import" href="bower_components/paper-card/paper-card.html">


        <link rel="import" href="bower_components/paper-styles/paper-styles.html">
        <link rel="import" href="bower_components/paper-material/paper-material.html">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            #cards {
            @apply(--layout-vertical);
            @apply(--center-justified);
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
            }
            paper-card {
                width: 100%;
                margin-bottom: 16px;
            }
        </style>
    </head>
    <body unresolved class="fullbleed layout vertical">
        <span id="browser-sync-binding"></span>
        <template is="dom-bind" id="app">
            <paper-drawer-panel id="paperDrawerPanel">
                <!-- Drawer Scroll Header Panel -->
                <paper-scroll-header-panel drawer fixed>

                    <!-- Drawer Toolbar -->
                    <paper-toolbar id="drawerToolbar">
                        <span class="paper-font-title">Menu</span>
                    </paper-toolbar>

                    <!-- Drawer Content -->
                    {{--<paper-menu class="list" attr-for-selected="data-route" selected="[[route]]">--}}
                        {{--<a data-route="home" href="{{baseUrl}}">--}}
                            {{--<iron-icon icon="home"></iron-icon>--}}
                            {{--<span>Home</span>--}}
                        {{--</a>--}}

                        {{--<a data-route="users" href="{{baseUrl}}users">--}}
                            {{--<iron-icon icon="info"></iron-icon>--}}
                            {{--<span>Users</span>--}}
                        {{--</a>--}}

                        {{--<a data-route="contact" href="{{baseUrl}}contact">--}}
                            {{--<iron-icon icon="mail"></iron-icon>--}}
                            {{--<span>Contact</span>--}}
                        {{--</a>--}}
                    {{--</paper-menu>--}}
                </paper-scroll-header-panel>

                <paper-scroll-header-panel main id="headerPanelMain" condenses keep-condensed-header>
                    <paper-toolbar id="mainToolbar" class="tall">
                        <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>
                        <span class="flex"></span>

                        <!-- Toolbar icons -->
                        <paper-icon-button icon="refresh"></paper-icon-button>
                        <paper-icon-button icon="search"></paper-icon-button>

                        <!-- Application name -->
                        <div class="middle middle-container center horizontal layout">
                            <div class="app-name">Bienvenido</div>
                        </div>

                    </paper-toolbar>


                    <div id="cards">
                        <paper-material elevation="1">
                            ... content ...
                        </paper-material>
                        <paper-card heading="Card Title">
                            <div class="card-content">Some content</div>
                            <div class="card-actions">
                                <paper-button>Some action</paper-button>
                            </div>
                        </paper-card>
                        <paper-card heading="Card Title" image="http://jsequeiros.com/sites/default/files/imagen-cachorro-comprimir.jpg?1399003306">
                            ...
                        </paper-card>
                        <paper-card heading="Card Title" image="http://jsequeiros.com/sites/default/files/imagen-cachorro-comprimir.jpg?1399003306">
                            ...
                        </paper-card>
                    </div>
                </paper-scroll-header-panel>
            </paper-drawer-panel>
        </template>
    </body>
</html>
