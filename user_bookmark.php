<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
echo "<script type='text/javascript'>";
               echo 'alert('.$_SESSION['login_username'].');';
               echo "</script>";
?>
  
  
  
  <script language="javascript">




    // Initialize array

    var arr = new Array();

 arr[arr.length] = new Array("Search The Web");

arr[arr.length] = new Array("Popular=================");

    arr[arr.length] = new Array("Aol", "http://search.aol.com/dirsearch.adp?query=");

    arr[arr.length] = new Array("Alta Vista", "http://www.altavista.com/cgi-bin/query?kl=XX&pg=q&Translate=on&q=");

    arr[arr.length] = new Array("Excite", "http://search.excite.com/search.gw?search=");

 arr[arr.length] = new Array("Google", "http://www.google.com/search?q=");

 arr[arr.length] = new Array("Hot Bot", "http://hotbot.lycos.com/?SM=MC&DV=0&LG=any&DC=10&DE=2&AM1=MC&MT=");

 arr[arr.length] = new Array("Looksmart", "http://www.looksmart.com/r_search?look=&pin=000925x015ff3eb1aa75d53e11&key=");

 arr[arr.length] = new Array("Lycos", "http://search.lycos.com/default.asp?lpv=1&loc=searchhp&tab=web&query=");

 arr[arr.length] = new Array("Mamma", "http://www.mamma.com/Mamma?lang=1&timeout=4&query=");

 arr[arr.length] = new Array("Meta Crawler", "http://search.metacrawler.com/texis/search?brand=metacrawler&redirect=&top=1&method=0&rpp=20&hpe=10®ion=0&timeout=0&sort=0&theme=classic&q=");

 arr[arr.length] = new Array("Msn", "http://search.msn.co.uk/results.asp?co=20&RS=CHECKED&FORM=SMCB&ba=0&v=1&CY=en-gb&q=");

 arr[arr.length] = new Array("Netscape", "http://info.netscape.com/home_search2.cgi?cp=Netscape&version=C&searchstring=");

 arr[arr.length] = new Array("Northern Light", "http://www.northernlight.com/nlquery.fcg?cb=0&qr=");

 arr[arr.length] = new Array("Yahoo", "http://search.yahoo.com/search?p=");

 arr[arr.length] = new Array("Web Hosting Search", "http://www.hostcompanies.com?x=");

 arr[arr.length] = new Array("Extra===================");

 arr[arr.length] = new Array("All the web", "http://www.alltheweb.com/search?cat=web&cs=utf-8&l=any&q=");

 arr[arr.length] = new Array("Ask Jeeves", "http://askjeeves.com/main/askjeeves.asp?origin=0&site_name=Jeeves&metasearch=yes&ads=&ask=");

 arr[arr.length] = new Array("Dog Pile", "http://search.dogpile.com/texis/search?geo=no&fs=web&av=custom&engines=goto&engines=looksmart&engines=thunderstone&engines=findwhat&engines=sprinks&engines=directhit&engines=google&engines=infoseek&engines=lycos&engines=kanoodle&engines=opendir&engines=realnames&engines=altavista&engines=yahoo&q=");

arr[arr.length] = new Array("Domain name search", "http://www.hostcompanies.com/domain.htm?x=");

arr[arr.length] = new Array("Femina", "http://femina.cybergrrl.com/cgi-bin/search.cgi?searchstring=");

arr[arr.length] = new Array("Galaxy", "http://www2.galaxy.com/bin/search?v=galaxy&q=");

arr[arr.length] = new Array("Go.com", "http://srch.overture.com/d/search/p/go/?Partner=go_home&Keywords=");

arr[arr.length] = new Array("Goto (overture)", "http://goto.com/d/search/;$sessionid$4MSTYAQAGBQQNQFIEEZQPUQ?type=home&Keywords=");

arr[arr.length] = new Array("Gutta Rat", "http://www.mamma.com/Gutterrat?lang=1&timeout=4&qtype=0&query=");

arr[arr.length] = new Array("ICQ", "http://google.icq.com/search/sitesearch/?q=");

arr[arr.length] = new Array("ixQuick", "http://ixquick.com/do/metasearch.pl?cat=web&cat=web&cmd=process_search&language=english_uk&query=");

arr[arr.length] = new Array("IWon", "http://search.iwon.com/commerce/multisearch.jsp?symbol_search_select=short&alias=%2Falias%2Fsearch&type=on&searchfor=");

arr[arr.length] = new Array("Metagopher", "http://www.metagopher.com/nph-go.cgi?e=0&t=1&w=");

arr[arr.length] = new Array("Open Directory", "http://search.dmoz.org/cgi-bin/search?search=");

arr[arr.length] = new Array("Personal Seek", "http://www.personalseek.com/s?k=");

arr[arr.length] = new Array("Pro Fusion", "http://www.profusion.com/searchresults.asp?AGT=ProFusion&S=5%2C0%2C10&auto=auto&autonum=3&RPP175=2&Category=175%2C175%2C99%2Csponsored&OB175=result-rank&Category=1%2C1%2C98%2Cuser&Category=245%2C245%2C0%2Cxchg&SHW245=0&Category=6%2C6%2C0%2Chorizontal&SHW6=0&Category=172%2C172%2C0%2Chorizontal&SHW172=0&Category=96%2C96%2C0%2Chorizontal&SHW96=0&setime=10&queryterm=");

arr[arr.length] = new Array("Quest Finder", "http://www.questfinder.com/search/search.cgi?reload=Y&category=catx3dx%3DALL&match=and&ul=either&s=");

arr[arr.length] = new Array("Search.com", "http://www.search.com/search?channel=1&tag=st.se.fd..sch&q=");

arr[arr.length] = new Array("Thunderstone", "http://go2net.thunderstone.com/texis/websearch/?max=20&dsbu=1&q=");

arr[arr.length] = new Array("Webcrawler", "http://www.webcrawler.com/cgi-bin/WebQuery?searchText=");

arr[arr.length] = new Array("whatUseek", "http://www.chubba.com/cgi-bin/zoom.go?group=1&source=engine&arg=");

arr[arr.length] = new Array("YEP", "http://www.yep.com/cgi-bin/search.cgi?criteria=");

arr[arr.length] = new Array("Yahooligans", "http://search.yahooligans.com/search/ligans?p=");

arr[arr.length] = new Array("Reference/Useful========");

arr[arr.length] = new Array("AOL Newsgroups", "http://x66.deja.com/=aol/dnquery.xp?&&uniq=973889863.2083127306&query=");

arr[arr.length] = new Array("AudioFind", "http://www.audiofind.com/search?q=");

arr[arr.length] = new Array("Britannica", "http://search.britannica.com/search?query=");

arr[arr.length] = new Array("Business Search", "http://www.business.com/search/rslt_default.asp?query=");

arr[arr.length] = new Array("Dictionary", "http://www.dictionary.com/cgi-bin/dict.pl?term=");

arr[arr.length] = new Array("Computer Dictionary", "http://www.instantweb.com/foldoc/foldoc.cgi?query=");

arr[arr.length] = new Array("Law Dictionary", "http://dictionary.law.com/default2.asp?typed=");

arr[arr.length] = new Array("Medical Dictionary", "http://cancerweb.ncl.ac.uk/cgi-bin/omd?query=");

arr[arr.length] = new Array("Download.com", "http://download.com.com/3120-20-0.html?tg=dl-2001&qt=");

arr[arr.length] = new Array("Ebay Auction ( goodies )", "http://search.ebay.com/search/search.dll?MfcISAPICommand=GetResult&ht=1&SortProperty=MetaEndSort&query=");

arr[arr.length] = new Array("Encarta", "http://encarta.msn.com/find/search.asp?search=");

arr[arr.length] = new Array("Find Law", "http://lawcrawler.findlaw.com/scripts/lc.pl?findlaw.com&entry=");

arr[arr.length] = new Array("Food (Recipes)", "http://www.ichef.com/chef-cgi-bin/findrecipe.cgi?ing=&cat=&Find=Find&scope=All+Recipes&words=");

arr[arr.length] = new Array("How Stuff Works", "http://www.howstuffworks.com/search/index.htm?words=");

arr[arr.length] = new Array("Job Search (canada)", "http://www.canada.plusjobs.com/cgi-bin/search/search.pl?stpos=0&stype=AND&query=");

arr[arr.length] = new Array("Jokes", "http://www.cybercheeze.com/mp/search?q=");

arr[arr.length] = new Array("Librarians Index", "http://www.lii.org/search?m=p&searchtype=keywords&query=");

arr[arr.length] = new Array("Medical (rare deseases)", "http://www.rarediseases.org/search/zcat_search_results?search_for=2&allfields=");

arr[arr.length] = new Array("IMDB Movie Search", "http://us.imdb.com/M/title-substring?title=");

arr[arr.length] = new Array("MP3 Search", "http://mp3.lycos.com/cgi-bin/search?form=lycosnet&doit=Go+Get+It%21&query=");

arr[arr.length] = new Array("Music Search", "http://musicsearch.com/cgi-bin/search.cgi?x=23&y=18&QUERY=");

arr[arr.length] = new Array("News", "http://news.search.com/search/?qt=");

arr[arr.length] = new Array("Share Price (Real Time uk)", "http://www.teletext.co.uk/finance/share_display.asp?intSubsectionID=68&Type=Search&NAME=");

arr[arr.length] = new Array("Share Price (Nasdaq)", "http://www.nasdaq.com/asp/comlookup.asp?srch=name&contain=0&mkt=ILX&key=");

arr[arr.length] = new Array("Thesaurus", "http://www.thesaurus.com/cgi-bin/search?config=roget&words=");

arr[arr.length] = new Array("Virtual Learning", "http://www.virtuallrc.com/search/search.cgi?nocpp=1&Match=1&Terms=");

arr[arr.length] = new Array("Wayback machine(web address)", "http://web.archive.org/web/*/");

arr[arr.length] = new Array("Weather (City or Country)", "http://www.wunderground.com/cgi-bin/findweather/getForecast?query=");

arr[arr.length] = new Array("Webshots (Photos)", "http://www.webshots.com/search/search.fcgi?cl=1&ch=1&ws=1&new=1&words=");

arr[arr.length] = new Array("Sports===============");

arr[arr.length] = new Array("Baseball", "http://www.mlb.com/NASApp/mlb/searchGlobalSearchServlet?search_mode=1&club=mlb&page_number=1&searchtypeid=-1&query_text1=");

arr[arr.length] = new Array("Baseball (players)", "http://www.godofthemachine.com/shared/BaseballSearch?submit=Search&search_type=batting&player=");

arr[arr.length] = new Array("BasketBall", "http://www.thebasketballportal.com/subpage.asp?type=searchbox&portal=Basketball&rl=%2Fvpdefault.asp&keyword=");

arr[arr.length] = new Array("Football", "http://search.soccernet.com/query.html?rq=0&ht=0&qp=&qt=arsenal&qs=&qc=&pw=100%25&ws=0&la=&qm=0&st=1&nh=25&lk=1&rf=0&oq=&rq=0&si=1&col=");

arr[arr.length] = new Array("Football365.com", "http://www.football365.com/Home/search.shtml?search=1&hitInd=0&hitMax=50&hitPP=10&searchText=");

arr[arr.length] = new Array("Golf", "http://www.searchwho.com/meta/search.pl?partner=100&auto=Golf&keywords=");

arr[arr.length] = new Array("Sports search (all)", "http://search.sportsline.com/cbs/query.html?ht=0&qp=&qs=&qc=cbs+pgatour+mlb&col=cbs+pgatour+mlb&pw=600&ws=0&la=&lk=1&qm=9&st=1&nh=15&5k=1&rf=0&oq=&rq=0&si=0&qt=");

arr[arr.length] = new Array("AI Search===============");

arr[arr.length] = new Array("Guide Beam", "http://guidebeam.com/cgi-bin/guidebeam/guidebeam2?inputbox=yes&template=Basic&templateChange=Change&cd=4&query=");

arr[arr.length] = new Array("Realterm Search", "http://www.infonetware.com/rtbin/psearch.pl?ndocs=700&timeout=8&base=infonetware&xbase=inw&html_base=inw&page=infonetware.html&izgui=nav_frame&pref=std&query=");

arr[arr.length] = new Array("Teoma", "http://s.teoma.com/search?qcat=1&qsrc=0&q=");

arr[arr.length] = new Array("Vivisimo", "http://vivisimo.com/search?v%3Asources=GigaBlast%2CFast%2CYahoo%2CMSN%2CLooksmart%2CNetscape&query=");

arr[arr.length] = new Array("Wise Nut", "http://www.wisenut.com/search/query.dll?notk=&phrasek=&allk=");

arr[arr.length] = new Array("Charity=================");


arr[arr.length] = new Array("Animals Asia", "http://www.animalsasia.org/?x=");

arr[arr.length] = new Array("Give Food", "http://www.thehungersite.com?x=");

    // etc...



    // Add options to list

    function addOptions()

    {

      var sel = document.searchForm.whichEngine;

      for(var i = 0; i < arr.length; i++)

      {

        sel.options[i] = new Option(arr[i][0], i); 

      }

    }



    // Get url for search engine

    function startSearch()

    {

      searchString = document.searchForm.searchText.value; 

      if(searchString != "")

      {

        var searchEngine = document.searchForm.whichEngine.selectedIndex;

        var finalSearchString = arr[searchEngine][1] + searchString;

        location.href = finalSearchString;

      }

      return false;

    }



    // Check if key pressed == enter

    function checkKey()

    {

      if(window.event.keyCode == '13')

      {

        return startSearch();

      }

      else return true;

    }



    </script>

  <SCRIPT language=JavaScript type=text/javascript>

<!--

<!-- Begin

function formHandler(form){

var URL = document.form.site.options[document.form.site.selectedIndex].value;

window.location.href = URL;

}



function expandDiv(tlll) {



                what  = eval(tlll + "_menu");



                if (what.style.display == "none") {

                        what.style.display = "";

                } 

else

 what.style.display = "none";

        }



	var oldc = new Array;

	function cCell(r,m){

	 if(!document.all) return;

	 if(m){

	  for(i=0;i<r.cells.length;i++){

	  oldc[i]=r.cells[i].bgColor;

	  r.cells[i].bgColor='D3D3D3';

	  }

	 }else{

	  for(i=0;i<r.cells.length;i++){

	  r.cells[i].bgColor=oldc[i];

	  }

	 }

	}

	//

	// Jump to a page

	//

	function jump() {

		parent.location = document.links.url.options[document.links.url.selectedIndex].value;

	}

	//



// End -->



function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.0

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && document.getElementById) x=document.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

//-->

</SCRIPT> 

<script type='text/javascript'>
function go_edit()
{
	alert("hi");
	window.location.href="bookmark_edit.php";
}
</script>	







  
</head>




<body bgcolor="#FFFFFF" text="#000000" onload="addOptions()">
<form name="searchForm">

        <div align="center"><b>Search the web ></b> 

          <input name="searchText" type="text" onkeypress="return checkKey()"/>

          <select name="whichEngine" style="background-color: #F5F5F5; font-weight: bold">

          </select>

          <input type="button" value="Search" onClick="return startSearch()"/>
          
          <br>

         
    </form>  

	<button type="button" class="btn btn-success" onclick="go_edit()" >Edit</button>	
	  
        
	
</body>


</html>
