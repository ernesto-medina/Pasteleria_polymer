<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    @extends('element')
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
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        paper-card {
            width: 100%;
            margin-bottom: 16px;
        }
        paper-icon-item iron-icon {
            color: #757575;
        }
    </style>
</head>
<body unresolved class="fullbleed layout vertical">
<span id="browser-sync-binding"></span>
<template is="dom-bind" id="app">
    <paper-drawer-panel id="paperDrawerPanel">
        <paper-scroll-header-panel drawer fixed>

            <paper-toolbar id="drawerToolbar">
                <span class="paper-font-title">Menu</span>
            </paper-toolbar>

            <!-- Drawer Content -->
            <paper-menu selected="0" selectable="paper-icon-item" on-iron-activate="menuSelect">
                <paper-icon-item role="menuitem">
                    <iron-icon icon="loyalty" item-icon></iron-icon>Inbox
                </paper-icon-item>
                </paper-menu>
            <paper-menu class="list">
                <a href="{{ url('/pruebarutas') }}">
                    <iron-icon icon="loyalty"></iron-icon>
                    <span>Productos</span>
                </a>
            </paper-menu>

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
                @yield('content')
                <paper-material elevation="1">
                    ... content ...
                </paper-material>
            </div>
        </paper-scroll-header-panel>
    </paper-drawer-panel>
</template>

<!-- Scripts -->
{{--<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
</body>
</html>
