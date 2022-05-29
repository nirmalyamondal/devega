#<INCLUDE_TYPOSCRIPT: source="DIR:EXT:siteconfig/Configuration/TSConfig/ContentElements/" extensions="ts">
#<INCLUDE_TYPOSCRIPT: source="DIR:EXT:siteconfig/Configuration/TSConfig/BackendLayouts/" extensions="ts">
<INCLUDE_TYPOSCRIPT: source="DIR:EXT:siteconfig/Configuration/TSConfig/GridElements/" extensions="ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:siteconfig/Configuration/TSConfig/RTE.ts">

# ++++ LAYOUT INHALTSELEMENTE MEHR IM SETUP ++++ 

TCEFORM.tt_content.layout{
	addItems {
		101 = Leistungen Home 
		102 = Produkte Home 
	}
	removeItems = 1, 2, 3, 4, 5, 6, 10, 11, 12, 20, 21
}