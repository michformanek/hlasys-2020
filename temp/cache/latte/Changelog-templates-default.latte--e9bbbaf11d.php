<?php
// source: /var/www/html/app/modules/Front/Changelog/templates/default.latte

use Latte\Runtime as LR;

final class Templatee9bbbaf11d extends Latte\Runtime\Template
{
	public $blocks = [
		'page' => 'blockPage',
	];

	public $blockTypes = [
		'page' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('page', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockPage(array $_args): void
	{
?><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Changelog</h1>
</div>


<ul class="changelog">
	<li> Verze 0.98 - 16.09.2012
		<ul>
			<li>Zrychleni vypisu navrhu pro VV&SO</li>
			<li>Volba moje navrhy</li>
			<li>VV muze vkladat komentar bez hlasovani</li>
			<li>Nejde vlozit navrh s prazdnym predmetem</li>
			<li>Pridana volba castecne objednano</li>
			<li>Priprava pro integraci s eshopem(pavkriz)</li>
		</ul>
	</li>
</ul>


<ul class="changelog">
	<li> Verze 0.97 - 14.11.2011
		<ul>
			<li>Ke kazdemu hlasovani pridana polozka cena(orientacni)</li>
			<li>Zmena v designu, aby se stranky zobrazovali spravne v mobilech(odstraneni tagu
				textarea)
			</li>
			<li>Prijaty navrh SO se v prehledu navrhu ukazuje modre podbarvneny v pripade ze
				uzivatel jeste nehlasoval
			</li>
			<li>Url adresy v textu navrhu se daji otevrit pomoci kliknuti mysi(odkaz)</li>
			<li>Vkladatel navrhu muze prikladat k navrhu komentare</li>
		</ul>
	</li>
</ul>

<ul class="changelog">
	<li> Verze 0.96 - 24.03.2011
		<ul>
			<li>Databaze bezi na vzdalenem serveru</li>
			<li>Opravy drobnych chyb, viz. jira</li>

		</ul>
	</li>
</ul>


<ul class="changelog">
	<li> Verze 0.95 - 22.06.2010
		<ul>
			<li>Autentizace pres LDAP</li>
			<li>Vlozit navrh muze jakykoliv uzivatel bez ohledu na jeho roli</li>
			<li>Drobna vylepseni funkci pro prace s uzivateli</li>

		</ul>
	</li>
</ul>

<ul class="changelog">
	<li> Verze 0.94 - 26.11.2008
		<ul>
			<li>Zobrazovani navrhu po strankach</li>
			<li>Filtrace navrhu podle stavu zakazku</li>
		</ul>
	</li>
</ul>

<ul class="changelog">
	<li> Verze 0.93 - 28.3.2008
		<ul>
			<li>Hlasovani i pro SO</li>
			<li>Drobne opravy funkcnosti a designu</li>
		</ul>
	</li>
</ul>

<ul class="changelog">
	<li> Verze 0.92 - 8.4.2006
		<ul>
			<li>Drobne zmìny v designu</li>
			<li>Opravy ve funkcich pro praci s uzivateli</li>
		</ul>
	</li>
</ul>

<ul class="changelog">
	<li> Verze 0.91 - 17.10.2005
		<ul>
			<li>VV mùŸou mazat návrhy do ko¹e</li>
			<li>Návrh roz¹íøen o poloŸku "Stav zakázky", oprávnìné osoby mùŸou zadávat (Objednáno,
				Doruèeno, Pøedáno,..)
			</li>
			<li>Do databáze doplnìny návrhy z 10.107.6.129/vv, pøijaté/nepøijaté návrhy odpovídají,
				kdo jak hlasoval ne - nejsou podklady(zbyteèné)
			</li>
		</ul>
	</li>
</ul>
<ul class="changelog">

	<li> Verze 0.90b
		<ul>
			<li>První verze hlasovacího systému</li>
			<li>Základní funkcionalita hlasování o návrzích</li>
		</ul>
	</li>
</ul>

<?php
	}

}
