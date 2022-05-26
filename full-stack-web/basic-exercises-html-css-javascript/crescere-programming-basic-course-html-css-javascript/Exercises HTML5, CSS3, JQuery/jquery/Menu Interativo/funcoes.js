/*==========================================================
	Variáveis Globais
===========================================================*/
var menuAberto = false;

/*==========================================================
	Função: ToggleMenu
	Descrição: Esta função serve para abrir e fechar o menu.
	Autor: Flávio França
	Data da última atualização: 25/03/2020
===========================================================*/
function toggleMenu()
{
	$("#divMenu").toggle(1000);
	
	if(menuAberto)
	{
		$("#iconExpand").html("<a href='#' onclick='toggleMenu();'><img src='./estilos/icones/ic_expand.png' height='30' /></a>");
		menuAberto = false;
	}
	else
	{
		$("#iconExpand").html("<a href='#' onclick='toggleMenu();'><img src='./estilos/icones/ic_fechar.png' height='30' /></a>");
		menuAberto = true;
	}
}

/*==========================================================
	Função: ExpandirSubMenu
	Descrição: Esta função serve para abrir e fechar os submenus.
	Autor: Flávio França
	Data da última atualização: 25/03/2020
===========================================================*/
function expandirSubMenu(pais)
{
	$("cidade-"pais).toggle(500);
	var subMenuAberto = $ ("#" + pais + "Aberto").val();
	
	if (SubMenuAberto == 0)
	{
				
	}
	else
	{	
		
	}
	
}