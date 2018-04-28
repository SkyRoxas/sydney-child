<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container" style="margin-bottom:60px">
			<p>行為->數字->問題->決策->行為</p>
			<p>這一連貫的連鎖效應是讓我一頭愛上BI這塊領域的動機。
			當真正踏入此行後，發現為了滿足上述的行為，我必須與不同的角色溝通、確認，再從資料山中挖掘出來有用資訊在經過篩選、彙總、驗證等才能從數字中反覆比對思考下決策。
			因此也讓我更加明確自己的定位，並且在此領域上繼續前行。</p>
		</div>

		<div class="resume-item container" style="margin-bottom:50px;">
			<div class="row">
				<div class="image col-sm-2">
			    <img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume.png" alt="" width="245" height="245"/>
			  </div>
				<div class="wrap col-sm-10">
					<div class="title">
						<h3>Eduation</h3>
					</div>
				  <div class="content">
				  	BSc of Architecture  Cairo University  Faculty of Engineering  2001
				  </div>
				</div>
			</div>
		</div>

		<div class="resume-item container" style="margin-bottom:50px;">
			<div class="row">
				<div class="image col-sm-2">
			    <img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume.png" alt="" width="245" height="245"/>
			  </div>
				<div class="wrap col-sm-10">
					<div class="title">
						<h3>Eduation</h3>
					</div>
				  <div class="content">
				  	BSc of Architecture  Cairo University  Faculty of Engineering  2001
				  </div>
				</div>
			</div>
		</div>

		<div class="resume-item container" style="margin-bottom:50px;">
			<div class="row">
				<div class="image col-sm-2">
			    <img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume.png" alt="" width="245" height="245"/>
			  </div>
				<div class="wrap col-sm-10">
					<div class="title">
						<h3>Eduation</h3>
					</div>
				  <div class="content">
				  	BSc of Architecture  Cairo University  Faculty of Engineering  2001
				  </div>
				</div>
			</div>
		</div>

		<hr style="margin-bottom:50px;">


		<h3>Experience</h3>


		<div style="margin:80px 0;">
			<div class="d-flex-middle">
				<img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume05.png" alt="" width="245" height="245" style="margin-right:20px; max-width:100px"/>
				<h3>2017 年 1 月 - 2018年 3 月</h3>
			</div>
			<hr/>
		</div>
		<div class="resume-item experience">
					<img src="http://line.skyroxas.tw/wp-content/uploads/2018/04/台灣之星-1.png" alt="" width="640" height="640"  style="margin-bottom:40px"/>
					<blockquote>
						<div>台灣之星 T Star/系統設計師</div>
						<div>建立動態激勵主題式模型</div>
					</blockquote>
			<div>
				<h3>技術</h3>
				<blockquote>
					<ol>
						<li>
							精準結合Data Mart 與 Metadata設計，建立符合需求的OLAP模型
						</li>
						<li>
							使用 IBM Cognos TM1 10.2.2 ，與同事共同設計每枝作業導入流程
						</li>
					</ol>
				</blockquote>
				<h3>應用</h3>
				<blockquote>
					<ol>
						<li>
							重點產品指標設定
							依照動態激勵辦法建立指標產品並且設定可參加激勵辦法的人。
						</li>
						<li>
							產能預測模式及貼標標準設定
							設定激勵期間及激勵推估方式(銷量、銷量排名、銷量占比、達成率)及貼標標準。
						</li>
						<li>
							激勵標的設定
							依照上述設定作業激勵期間均量推估出當週/月的門號將業務員貼標並且計算人數貼標占比。
						</li>
						<li>
							激勵分群及激勵辦法設定
							PM(專案經理)依激勵、風險個別做分群設定作業。
						</li>
						<li>
							預算上限及效益設定
							由各群第二次設定推估活動期間、分成台獎、台懲計算方式設定獎懲金額及獎金發放上下限。
						</li>
						<li>
							激勵機制設定結果審核
							推估:推估業務員銷量並依照門檻項目與門檻做比較並推估出獎罰金。
							行進間:當實績日期已發生於活動期間，實績量會滾算進來與門檻做比較系統計算出實際獎罰金額。
						</li>
					</ol>
				</blockquote>
			</div>
		</div>

		<div style="margin:80px 0;">
			<div class="d-flex-middle">
				<img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume05.png" alt="" width="245" height="245" style="margin-right:20px; max-width:100px"/>
				<h3>2017 年 1 月 - 2018年 3 月</h3>
			</div>
			<hr/>
		</div>
		<div class="resume-item experience">
				<img src="http://line.skyroxas.tw/wp-content/uploads/2018/04/儒鴻企業.png" alt="" width="274" height="184" style="margin-bottom:40px"/>
					<blockquote>
						<div>台灣之星 T Star/系統設計師</div>
						<div>建立動態激勵主題式模型</div>
					</blockquote>
			<div>
				<h3>技術</h3>
				<blockquote>
					<ol>
						<li>
							精準結合Data Mart 與 Metadata設計，建立符合需求的OLAP模型
						</li>
						<li>
							使用 IBM Cognos TM1 10.2.2 ，與同事共同設計每枝作業導入流程
						</li>
					</ol>
				</blockquote>
				<h3>應用</h3>
				<blockquote>
					<ol>
						<li>
							重點產品指標設定
							依照動態激勵辦法建立指標產品並且設定可參加激勵辦法的人。
						</li>
						<li>
							產能預測模式及貼標標準設定
							設定激勵期間及激勵推估方式(銷量、銷量排名、銷量占比、達成率)及貼標標準。
						</li>
						<li>
							激勵標的設定
							依照上述設定作業激勵期間均量推估出當週/月的門號將業務員貼標並且計算人數貼標占比。
						</li>
						<li>
							激勵分群及激勵辦法設定
							PM(專案經理)依激勵、風險個別做分群設定作業。
						</li>
						<li>
							預算上限及效益設定
							由各群第二次設定推估活動期間、分成台獎、台懲計算方式設定獎懲金額及獎金發放上下限。
						</li>
						<li>
							激勵機制設定結果審核
							推估:推估業務員銷量並依照門檻項目與門檻做比較並推估出獎罰金。
							行進間:當實績日期已發生於活動期間，實績量會滾算進來與門檻做比較系統計算出實際獎罰金額。
						</li>
					</ol>
				</blockquote>
			</div>
		</div>

		<div style="margin:80px 0;">
			<div class="d-flex-middle">
				<img src="http://line.roxas.tw/wp-content/uploads/2018/04/Resume05.png" alt="" width="245" height="245" style="margin-right:20px; max-width:100px"/>
				<h3>2017 年 1 月 - 2018年 3 月</h3>
			</div>
			<hr/>
		</div>
		<div class="resume-item experience">
			<img src="http://line.skyroxas.tw/wp-content/uploads/2018/04/神腦.png" alt="" width="211" height="188"/>
					<blockquote>
						<div>台灣之星 T Star/系統設計師</div>
						<div>建立動態激勵主題式模型</div>
					</blockquote>
			<div>
				<h3>技術</h3>
				<blockquote>
					<ol>
						<li>
							精準結合Data Mart 與 Metadata設計，建立符合需求的OLAP模型
						</li>
						<li>
							使用 IBM Cognos TM1 10.2.2 ，與同事共同設計每枝作業導入流程
						</li>
					</ol>
				</blockquote>
				<h3>應用</h3>
				<blockquote>
					<ol>
						<li>
							重點產品指標設定
							依照動態激勵辦法建立指標產品並且設定可參加激勵辦法的人。
						</li>
						<li>
							產能預測模式及貼標標準設定
							設定激勵期間及激勵推估方式(銷量、銷量排名、銷量占比、達成率)及貼標標準。
						</li>
						<li>
							激勵標的設定
							依照上述設定作業激勵期間均量推估出當週/月的門號將業務員貼標並且計算人數貼標占比。
						</li>
						<li>
							激勵分群及激勵辦法設定
							PM(專案經理)依激勵、風險個別做分群設定作業。
						</li>
						<li>
							預算上限及效益設定
							由各群第二次設定推估活動期間、分成台獎、台懲計算方式設定獎懲金額及獎金發放上下限。
						</li>
						<li>
							激勵機制設定結果審核
							推估:推估業務員銷量並依照門檻項目與門檻做比較並推估出獎罰金。
							行進間:當實績日期已發生於活動期間，實績量會滾算進來與門檻做比較系統計算出實際獎罰金額。
						</li>
					</ol>
				</blockquote>
			</div>
		</div>

	<?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
