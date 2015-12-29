<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    @extends('element')
    <style>
        /*
        Revisar la guia de google para desarrollo de menú:
        https://www.google.com/design/spec/components/lists.html#lists-specs
        */
        .elementmenu {
            min-height: 30px;
            padding-top: 8px;
            padding-bottom: 8px;
            font-family: 'Roboto', monospace;
        }
        paper-toolbar.toolbar-menu {
            background: url("http://rack.2.mshcdn.com/media/ZgkyMDE1LzA5LzEzLzNjL2dvb2dsZXRodW1iLmIyNGE0LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/63126c72/af4/google-thumb.jpg");
        }

        .content-cards {
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 16px;
            padding-bottom: 16px;
        }
    </style>
</head>
<body class="fullbleed layout horizontal center-center">
<template is="dom-bind" id="app">
    <paper-drawer-panel class="flex">
        <paper-header-panel drawer>
            <paper-toolbar class="tall toolbar-menu">
                <div>Application</div>
            </paper-toolbar>
            <div class="vertical layout">
                <paper-menu >
                    <div class="flex elementmenu">
                        <paper-item><iron-icon icon="account-circle"></iron-icon> Opción 1</paper-item>
                    </div>
                    <div class="flex elementmenu">
                        <paper-item>Opción 2</paper-item>
                    </div>
                </paper-menu>
            </div>
        </paper-header-panel>
        <paper-header-panel main mode="waterfall-tall">
            <paper-toolbar>
                <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
                <div>Title</div>
            </paper-toolbar>
            <div class="content-cards">
                <paper-card heading="Tarjeta de prueba" image="http://rack.2.mshcdn.com/media/ZgkyMDE1LzA5LzEzLzNjL2dvb2dsZXRodW1iLmIyNGE0LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/63126c72/af4/google-thumb.jpg">
                    <div class="card-content"> Esta es una tarjeta de prueba...</div>
                </paper-card>
                <paper-card heading="Tarjeta de prueba" image="http://rack.2.mshcdn.com/media/ZgkyMDE1LzA5LzEzLzNjL2dvb2dsZXRodW1iLmIyNGE0LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/63126c72/af4/google-thumb.jpg">
                    <div class="card-content"> Esta es una tarjeta de prueba...</div>
                    <div class="card-actions">
                        <paper-button raised>Coso genial</paper-button>
                    </div>
                </paper-card>
                <paper-card elevation="3" heading="Tarjeta de prueba" image="http://rack.2.mshcdn.com/media/ZgkyMDE1LzA5LzEzLzNjL2dvb2dsZXRodW1iLmIyNGE0LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/63126c72/af4/google-thumb.jpg">
                    <div class="card-content"> Esta es una tarjeta de prueba...</div>
                    <div class="card-actions">
                        <paper-button raised>Coso genial</paper-button>
                    </div>
                </paper-card>
                <paper-card heading="Tarjeta de prueba" image="http://rack.2.mshcdn.com/media/ZgkyMDE1LzA5LzEzLzNjL2dvb2dsZXRodW1iLmIyNGE0LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/63126c72/af4/google-thumb.jpg">
                    <div class="card-content"> Esta es una tarjeta de prueba...</div>
                    <div class="card-actions">
                        <paper-button raised>Coso genial</paper-button>
                    </div>
                </paper-card>
            </div>
        </paper-header-panel>
    </paper-drawer-panel>
</template>

<!-- Scripts -->
{{--<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
</body>
</html>
