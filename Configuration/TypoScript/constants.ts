
plugin.tx_sedesunal_sedes {
    view {
        # cat=plugin.tx_sedesunal_sedes/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:sedes_unal/Resources/Private/Templates/
        # cat=plugin.tx_sedesunal_sedes/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:sedes_unal/Resources/Private/Partials/
        # cat=plugin.tx_sedesunal_sedes/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:sedes_unal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_sedesunal_sedes//a; type=string; label=Default storage PID
        storagePid =
    }
}
