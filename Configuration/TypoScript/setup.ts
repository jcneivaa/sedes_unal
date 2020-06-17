
plugin.tx_sedesunal_sedes {
    view {
        templateRootPaths.0 = EXT:sedes_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_sedesunal_sedes.view.templateRootPath}
        partialRootPaths.0 = EXT:sedes_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_sedesunal_sedes.view.partialRootPath}
        layoutRootPaths.0 = EXT:sedes_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_sedesunal_sedes.view.layoutRootPath}
    }

    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

page{
    includeCSS {

        sede = EXT:sedes_unal/Resources/Public/Css/sede.scss
        jssocials-theme-flat = EXT:sedes_unal/Resources/Public/Css/jssocials-theme-flat.css
        jssocials = EXT:sedes_unal/Resources/Public/Css/jssocials.css
        font-awesome = EXT:sedes_unal/Resources/Public/Css/font-awesome.css


        
    }

    includeJS{
        jsprintf = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/libs/sprintf.js
        jspdf = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/jspdf.js
        jspdf_debug = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/jspdf.debug.js
        jspdf_addimage = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/jspdf.plugin.addimage.js
        base64 = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/libs/base64.js
        jspdf_autotable = EXT:sedes_unal/Resources/Public/Js/libs/jspdf/jspdf.plugin.autotable.js
        fullscreen-helper = EXT:sedes_unal/Resources/Public/Js/libs/full-screen-helper.js
        jssocials = EXT:sedes_unal/Resources/Public/Js/libs/jssocials.min.js

    }

    includeJSFooter{

        sede = EXT:sedes_unal/Resources/Public/Js/sede.js 

    }

}