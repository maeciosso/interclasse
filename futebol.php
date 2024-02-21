<?php
	// Abrir o arquivo datas.txt
	$arquivoDatas = fopen('./interclasse/textos/datas.txt', 'r');

	//Criar arquivos para cada categoria
	$arquivoFutebol = fopen('./interclasse/textos/futebol.txt', 'w');

	//loop
	while(($linha = fgets($arquivoDatas)) !== false){
		if(strpos($linha, 'Futebol') !== false){
			fwrite($arquivoFutebol, $linha);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/pag.css">
	<link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futebol</title>
</head>
<body>
<header>
    <h1>Interclasse</h1>
    <svg width="82" height="57" viewBox="0 0 82 57" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8.68697 35.9431V37.4327H13.5134V39.4349H8.68697V41.1866H13.9902V43.3317H6.30344V33.7981H13.9902V35.9431H8.68697Z" fill="black"></path>
      <path d="M20.7104 40.6982V38.6961C20.3291 38.577 19.9121 38.4815 19.5903 38.4815C18.2555 38.4815 17.5763 38.9703 17.5763 40.0428C17.5763 40.9961 18.2554 41.5681 19.0778 41.5681C19.8048 41.5681 20.3054 41.1511 20.7104 40.6982ZM23.0819 33.6789V43.3318H20.7104V42.2355C20.0312 42.9505 19.1374 43.451 17.8862 43.451C16.6349 43.451 15.1809 42.2116 15.1809 40.0547C15.1809 37.8738 16.6825 36.7774 18.3509 36.7774C19.185 36.7774 20.0073 36.992 20.7104 37.266V33.9172C21.4971 33.9172 22.212 33.8458 23.0819 33.6789Z" fill="black"></path>
      <path d="M31.4231 36.8965V43.3317H29.0398V42.2712C28.4439 42.9026 27.6574 43.451 26.5968 43.451C25.2858 43.451 24.5112 42.6048 24.5112 40.2214V36.8965H26.8827V40.0068C26.8827 40.8769 27.0853 41.4726 27.7408 41.4726C28.1698 41.4726 28.563 41.2223 29.0398 40.7339V36.8965H31.4231Z" fill="black"></path>
      <path d="M35.1048 40.138C35.1048 40.9603 35.5457 41.7468 36.8089 41.7468C37.8099 41.7468 38.8349 41.4369 39.7405 41.1152V42.9385C39.1446 43.2604 37.9647 43.451 36.8326 43.451C34.2348 43.451 32.7333 42.2712 32.7333 40.138C32.7333 37.9572 34.2228 36.7774 36.6421 36.7774C37.7146 36.7774 38.9064 36.9679 39.7405 37.2898V39.137C38.8349 38.8153 37.8099 38.5052 36.8089 38.5052C35.5457 38.5052 35.1048 39.2919 35.1048 40.138Z" fill="black"></path>
      <path d="M46.33 40.3167C45.9964 40.567 45.4362 40.6384 44.1254 40.6384C43.4579 40.6384 43.2434 40.9245 43.2434 41.2344C43.2434 41.58 43.4819 41.7944 44.1492 41.7944C45.1383 41.7944 46.33 40.9485 46.33 40.3167ZM48.7135 40.2453V43.3318H46.6758L46.3419 41.997C45.7461 43.1172 44.471 43.451 43.1602 43.451C42.016 43.451 41.0508 42.7955 41.0508 41.592C41.0508 40.3167 42.0279 39.4706 44.1611 39.4588C45.1383 39.4588 46.33 39.6614 46.33 39.0536C46.33 38.7794 45.901 38.5411 44.3877 38.5411C43.1004 38.5411 41.3128 39.0059 41.2177 39.0297V37.2658C41.6586 37.1228 43.315 36.7774 44.7809 36.7774C47.5694 36.7774 48.7135 38.0168 48.7135 40.2453Z" fill="black"></path>
      <path d="M52.276 40.138C52.276 40.9603 52.7169 41.7468 53.9802 41.7468C54.9811 41.7468 56.0061 41.4369 56.9117 41.1152V42.9385C56.4231 43.2007 55.5532 43.3794 54.6355 43.4271L53.0028 45.7152L50.4646 44.8928L52.7647 43.3437C50.9413 43.022 49.9045 41.9017 49.9045 40.138C49.9045 37.9572 51.3941 36.7774 53.8133 36.7774C54.8858 36.7774 56.0777 36.9679 56.9117 37.2898V39.137C56.0061 38.8153 54.9811 38.5052 53.9802 38.5052C52.7169 38.5052 52.276 39.2919 52.276 40.138Z" fill="black"></path>
      <path d="M63.5011 40.3167C63.1675 40.567 62.6073 40.6384 61.2965 40.6384C60.6289 40.6384 60.4145 40.9245 60.4145 41.2343C60.4145 41.58 60.653 41.7944 61.3203 41.7944C62.3094 41.7944 63.5011 40.9485 63.5011 40.3167ZM59.2467 35.3711C59.0917 35.4665 58.8297 35.6453 58.8297 35.6453V33.8101C58.8297 33.8101 59.4613 33.238 60.4027 33.1426C61.1655 33.0593 61.8089 33.3572 62.512 33.6192C63.1912 33.8815 63.8706 33.8695 64.514 33.5241C64.6691 33.4405 65.0981 33.1544 65.0981 33.1544V34.8706C65.0981 34.8706 64.8239 35.1446 64.5261 35.3235C64.1686 35.5261 63.7633 35.6571 63.3462 35.6571C62.5716 35.6571 61.952 35.3235 61.2249 35.0971C60.5338 34.8706 59.8545 35.0018 59.2467 35.3711ZM65.8846 40.2453V43.3318H63.8469L63.5129 41.997C62.9172 43.1172 61.6421 43.451 60.3312 43.451C59.1871 43.451 58.2219 42.7955 58.2219 41.592C58.2219 40.3167 59.199 39.4706 61.3322 39.4588C62.3094 39.4588 63.5011 39.6614 63.5011 39.0536C63.5011 38.7794 63.072 38.5411 61.5588 38.5411C60.2715 38.5411 58.4839 39.0059 58.3888 39.0297V37.2658C58.8297 37.1228 60.4861 36.7774 61.952 36.7774C64.7405 36.7774 65.8846 38.0168 65.8846 40.2453Z" fill="black"></path>
      <path d="M73.2366 40.1022C73.2366 39.0179 72.6288 38.5052 71.3417 38.5052C70.0547 38.5052 69.4469 39.0179 69.4469 40.1022C69.4469 41.1866 70.0547 41.723 71.3417 41.723C72.6288 41.723 73.2366 41.1866 73.2366 40.1022ZM75.6081 40.1022C75.6081 42.14 74.1184 43.451 71.3417 43.451C68.565 43.451 67.0753 42.14 67.0753 40.1022C67.0753 38.0884 68.565 36.7774 71.3417 36.7774C74.1184 36.7774 75.6081 38.0884 75.6081 40.1022Z" fill="black"></path>
      <path d="M7.12654 52.0463L5.81554 48.6619L3.92081 53.5718C4.99334 52.7257 6.13746 52.2371 7.12654 52.0463ZM8.99741 56.8728L7.82977 53.8578C6.19703 53.8937 3.80166 54.6563 2.63385 56.8728H0L3.9924 47.3392H7.63886L11.6313 56.8728H8.99741Z" fill="black"></path>
      <path d="M17.3742 54.2393V52.2372C16.9929 52.1181 16.5758 52.0226 16.2541 52.0226C14.9192 52.0226 14.24 52.5114 14.24 53.584C14.24 54.5372 14.9192 55.1092 15.7416 55.1092C16.4685 55.1092 16.9692 54.6922 17.3742 54.2393ZM19.7457 47.22V56.873H17.3742V55.7766C16.695 56.4916 15.8012 56.9921 14.5499 56.9921C13.2987 56.9921 11.8447 55.7527 11.8447 53.5958C11.8447 51.4149 13.3462 50.3185 15.0147 50.3185C15.8487 50.3185 16.6711 50.5331 17.3742 50.8071V47.4583C18.1609 47.4583 18.8758 47.3869 19.7457 47.22Z" fill="black"></path>
      <path d="M28.8497 50.4258L26.347 56.873H22.9626L20.4601 50.4258L23.058 50.4376L24.6547 55.4787L26.2518 50.4376L28.8497 50.4258Z" fill="black"></path>
      <path d="M31.3634 53.1786H34.5691C34.45 52.3921 33.9614 52.0463 32.8768 52.0463C31.9712 52.0704 31.4825 52.4397 31.3634 53.1786ZM33.6039 55.4071C34.6764 55.4071 35.7131 55.0972 36.6187 54.7755V56.4798C36.023 56.8015 34.8433 56.9921 33.5917 56.9921C30.4696 56.9921 28.968 55.8123 28.968 53.7268C28.968 51.6295 30.4577 50.3185 32.8768 50.3185C35.5941 50.3185 36.8811 51.8319 36.8811 54.1916H31.423C31.6135 54.8707 32.1974 55.4071 33.6039 55.4071Z" fill="black"></path>
      <path d="M45.6749 53.5479V56.8728H43.3033V53.7625C43.3033 52.7614 43.1008 52.2966 42.2904 52.2966C41.8852 52.2966 41.3011 52.4872 40.6934 52.8926V56.8728H38.3102V50.5568C39.0967 50.5568 39.8236 50.4495 40.6934 50.3183V51.4626C41.3609 50.9381 42.481 50.3183 43.6131 50.3183C44.9002 50.3183 45.6749 51.0334 45.6749 53.5479Z" fill="black"></path>
      <path d="M50.6553 52.1775V54.2987C50.6553 54.9423 51.0844 55.0854 51.5373 55.0854C52.0139 55.0854 52.4311 55.0496 53.4081 54.6324V56.4916C52.1093 56.9325 51.3822 56.9921 50.2503 56.9921C49.4159 56.9921 48.2601 56.5035 48.2601 55.1092L48.272 52.1775H46.8537V50.4376C48.3077 50.4376 48.4864 50.4258 48.4984 49.1982V48.221C49.261 48.221 49.9404 48.1138 50.6553 47.959V50.4376H53.6466V52.1775H50.6553Z" fill="black"></path>
      <path d="M54.8378 50.4376H57.2093V56.8728H54.8378V50.4376ZM54.8378 47.3392H57.2211V49.3412H54.8378V47.3392Z" fill="black"></path>
      <path d="M63.1076 53.0474C64.8593 53.4049 65.5268 54.12 65.5268 55.1329C65.5268 56.5035 64.3707 56.9921 62.166 56.9921C60.7361 56.9921 59.5085 56.7895 58.6386 56.5035V54.692C59.9733 55.2282 60.5573 55.3712 61.749 55.3712C62.7858 55.3712 63.1314 55.2641 63.1314 55.0019C63.1314 54.5966 62.2613 54.5966 61.0697 54.3584C59.5442 54.0485 58.4835 53.524 58.4835 52.3324C58.4835 51.0572 59.6991 50.3064 61.6774 50.3064C63.0837 50.3064 64.6806 50.6879 65.3359 50.831V52.547C64.204 52.2252 63.2266 52.0704 62.2613 52.0704C61.3796 52.0704 60.8434 52.2014 60.8434 52.3921C60.8434 52.69 62.2852 52.8805 63.1076 53.0474Z" fill="black"></path>
      <path d="M70.1617 52.1775V54.2987C70.1617 54.9423 70.5907 55.0854 71.0436 55.0854C71.5202 55.0854 71.9374 55.0496 72.9145 54.6324V56.4916C71.6157 56.9325 70.8886 56.9921 69.7567 56.9921C68.9223 56.9921 67.7665 56.5035 67.7665 55.1092L67.7783 52.1775H66.36V50.4376C67.814 50.4376 67.9928 50.4258 68.0048 49.1982V48.221C68.7674 48.221 69.4468 48.1138 70.1617 47.959V50.4376H73.153V52.1775H70.1617Z" fill="black"></path>
      <path d="M79.528 53.8578C79.1945 54.1081 78.6342 54.1795 77.3234 54.1795C76.6559 54.1795 76.4415 54.4656 76.4415 54.7755C76.4415 55.1211 76.6799 55.3355 77.3473 55.3355C78.3364 55.3355 79.528 54.4896 79.528 53.8578ZM81.9116 53.7864V56.8729H79.8738L79.5399 55.5381C78.9441 56.6583 77.669 56.9921 76.3582 56.9921C75.2141 56.9921 74.2488 56.3366 74.2488 55.1331C74.2488 53.8578 75.2259 53.0117 77.3591 52.9999C78.3364 52.9999 79.528 53.2025 79.528 52.5947C79.528 52.3205 79.099 52.0822 77.5858 52.0822C76.2984 52.0822 74.5108 52.547 74.4157 52.5708V50.8069C74.8566 50.6639 76.5131 50.3185 77.9789 50.3185C80.7674 50.3185 81.9116 51.5579 81.9116 53.7864Z" fill="black"></path>
      <path d="M26.9775 24.694L26.0605 27.0822H26.0687C28.6442 26.5596 31.2686 26.1697 33.9361 25.9206L35.3565 20.2228C34.0968 20.5521 32.8435 20.9087 31.6326 21.3699C29.8079 22.0647 28.0948 23.0601 26.9775 24.694Z" fill="black"></path>
      <path d="M51.4727 15.6771C49.8046 16.5013 47.1448 17.2943 45.9006 17.5893L47.9782 25.9204C50.6433 26.1695 53.2674 26.5596 55.843 27.0822H55.8511L51.4727 15.6771Z" fill="black"></path>
      <path d="M33.0279 16.2338C34.9661 15.619 36.7722 15.2407 38.6599 14.7866C40.5555 14.331 42.4483 13.8597 44.3372 13.3774C46.1793 12.907 48.1981 12.4185 49.8728 11.4877C51.3687 10.6564 52.4678 9.0734 51.8276 7.31396C51.0983 9.1826 49.2317 10.0668 47.4386 10.6737C45.71 11.2585 43.9073 11.7151 42.1342 12.1373C40.3091 12.5715 38.4836 12.9564 36.657 13.3841C34.8526 13.8066 32.9875 14.2472 31.28 14.9853C29.8283 15.6126 28.2162 16.3771 28.4979 18.7195C29.6084 17.4254 31.4642 16.7301 33.0279 16.2338Z" fill="black"></path>
      <path d="M42.1263 10.8729C44.0684 10.4082 45.9877 9.87216 47.8512 9.14953C48.6207 8.85114 49.4161 8.46433 50.0046 7.87064C50.5942 7.27557 50.9185 6.28631 50.5667 5.48814C50.1051 6.44993 49.2719 7.06233 48.3398 7.51696L45.4542 0H41.5139L43.7765 9.0733C41.7973 9.60707 39.7841 10.0284 37.7884 10.4674L40.3979 0H36.4573L31.7681 12.2148C30.899 12.6226 30.142 13.2556 30.1333 14.5709C30.6045 14.1406 31.6024 13.4848 33.973 12.7992C37.8904 11.6665 38.6565 11.7037 42.1263 10.8729Z" fill="black"></path>
      <path d="M52.2324 13.5408C53.0977 12.6382 53.5633 11.1416 53.0364 9.95577C51.9014 12.5352 48.8499 13.4008 46.3558 14.1023C43.7245 14.8421 41.0584 15.5 38.3996 16.1351C35.904 16.7314 33.3395 17.2197 30.9948 18.2991C28.9737 19.2296 27.1126 20.5664 27.0704 23.5276C28.1879 21.8937 29.9011 20.8982 31.7256 20.2034C33.7313 19.4394 35.8527 18.9614 37.9282 18.422C39.1353 18.1081 40.3421 17.7945 41.5465 17.4708C43.6467 16.9058 45.7629 16.3739 47.8227 15.6723C49.301 15.1685 51.1147 14.7067 52.2324 13.5408Z" fill="black"></path>
    </svg>
    <a href="index.php"><button>voltar</button></a>
  </header>

  <main>
    <div class="pag">
        <h1>Futebol:</h1>
        <div class="data">
        <?php
          // Ler o conteúdo do arquivo TXT
          $conteudoF = file_get_contents('./interclasse/textos/futebol.txt');
             
          // Separar o conteúdo por linhas
          $linhas = explode("\n", $conteudoF);
               
          // Exibir cada linha em um parágrafo
          foreach ($linhas as $linha) {
          echo "<p>$linha</p>";
          }
        ?>
        </div>
<div class="times">
    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM3MA</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM3MA</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM3MB</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM3MB</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM3MC</td>
  </tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM3MC</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM3MC</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM2MA</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM2MA</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM2MB</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM2MB</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM2MC</td>
  </tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM2MC</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM2MC</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM1MA</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM1MA</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM1MB</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM1MB</td>
	</tr>
    </table>

    <table>
	<tr>
		<th>nome</th>
		<th>turma</th>
	</tr>
	<tr>
		<td>Julie Valenzuela</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Aladdin Wilkerson</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Vladimir Bartlett</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Imelda Saunders</td>
		<td>EM1MC</td>
  </tr>
	<tr>
		<td>Thomas Espinoza</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Vanna Sheppard</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Graiden Bishop</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Tanya Sweet</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Sasha Mcgowan</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Kyla Wyatt</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Charde Gonzales</td>
		<td>EM1MC</td>
	</tr>
	<tr>
		<td>Adrienne Sutton</td>
		<td>EM1MC</td>
	</tr>
    </table>
</div>
    </div>
  </main>
</body>
</html>