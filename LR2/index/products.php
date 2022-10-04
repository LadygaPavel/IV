<?php require_once 'logic.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>PhpStorm Lessons</title>
</head>
<body style="overflow-y: scroll; overflow-x: hidden;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="sd">
    <div class="nav1">
        <div class="row" style="height: 80px">
            <div class="col" style="margin-left: 50px">
                <svg style="padding-top: 25px" width="500%" height="90%" xmlns="http://www.w3.org/2000/svg"><path d="M31.4493 0H0V3.36505H31.4493V0Z" fill="#2CCBD1"></path> <path d="M31.4493 5.91162H0V9.27667H31.4493V5.91162Z" fill="#2CCBD1"></path> <path d="M31.4493 11.8118H0V15.1882H31.4493V11.8118Z" fill="#2CCBD1"></path> <path d="M31.4493 17.7234H0V21.0998H31.4493V17.7234Z" fill="#2CCBD1"></path> <path d="M31.4493 23.635H0V27.0001H31.4493V23.635Z" fill="#2CCBD1"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M208.184 20.7019H199.588C199.994 20.1254 200.287 19.4774 200.452 18.792C200.641 18.0298 200.733 17.2467 200.725 16.4615V8.21935H208.184V20.7019ZM196.325 20.7019V25.0673H198.065V22.3503H210.049V25.0673H211.788V20.7019H209.923V6.5482H198.974V16.1772C198.99 17.0782 198.864 17.9761 198.599 18.8375C198.36 19.5731 197.909 20.2218 197.303 20.7019H196.325ZM191.777 16.7457H184.955L188.082 8.21935H188.65L191.777 16.7457ZM186.899 6.51409L181.055 22.3162H182.852L184.33 18.269H192.289L193.79 22.3162H195.597L189.719 6.51409H186.899ZM165.353 20.8951L165.49 22.5663C166.162 22.5311 166.821 22.3569 167.423 22.0547C167.939 21.7796 168.386 21.3909 168.73 20.9179C169.078 20.4171 169.325 19.8534 169.458 19.2581C169.614 18.5642 169.69 17.8548 169.685 17.1436V8.21935H177.144V22.3503H178.884V6.5482H167.946V16.7002C167.947 17.1902 167.921 17.6798 167.866 18.1667C167.83 18.6227 167.714 19.069 167.525 19.4855C167.349 19.8685 167.079 20.2009 166.74 20.4518C166.329 20.7268 165.848 20.8804 165.353 20.8951ZM152.357 6.5482V22.3503H154.086V14.9381H155.439L162.704 22.3503H165.092L156.905 14.0855L164.194 6.5482H161.92L155.507 13.2442H154.154V6.5482H152.357ZM142.261 22.5436H144.114C144.938 22.5586 145.761 22.4862 146.57 22.3276C147.166 22.2035 147.724 21.9384 148.196 21.5545C148.634 21.1775 148.951 20.679 149.106 20.1221C149.315 19.3831 149.411 18.6163 149.39 17.8484V16.8139H147.582C147.594 16.9425 147.594 17.0718 147.582 17.2004V17.5642C147.595 18.1299 147.538 18.6951 147.411 19.2467C147.319 19.6409 147.109 19.9976 146.809 20.2699C146.484 20.5389 146.09 20.7121 145.672 20.7701C145.096 20.8599 144.515 20.9017 143.932 20.8951H142.807C142.199 20.8979 141.592 20.8675 140.987 20.8042C140.471 20.7377 139.991 20.5018 139.623 20.1335C139.25 19.7691 139.013 19.2875 138.952 18.7692C138.877 18.0822 138.843 17.3913 138.85 16.7002V12.1528C138.843 11.4617 138.877 10.7708 138.952 10.0838C139.013 9.56555 139.25 9.08388 139.623 8.71956C140.007 8.38588 140.482 8.17587 140.987 8.11704C141.589 8.01908 142.197 7.96588 142.807 7.95788H144.023C144.59 7.95207 145.157 7.9939 145.717 8.08293C146.127 8.14867 146.516 8.30818 146.854 8.54904C147.145 8.80118 147.354 9.13334 147.457 9.50398C147.594 10.0152 147.655 10.5438 147.639 11.0728V11.5048H149.447V10.8568C149.467 10.1284 149.363 9.40181 149.14 8.70819C148.962 8.16944 148.635 7.69234 148.196 7.33262C147.719 6.9537 147.157 6.69622 146.559 6.5823C145.775 6.41131 144.973 6.3312 144.171 6.34356H142.318C141.483 6.32927 140.649 6.42482 139.839 6.62777C139.227 6.78942 138.667 7.10663 138.213 7.54862C137.777 8.01897 137.471 8.59502 137.326 9.21977C137.129 10.0538 137.037 10.9094 137.053 11.7663V17.1322C137.037 17.9891 137.129 18.8447 137.326 19.6787C137.471 20.3035 137.777 20.8795 138.213 21.3499C138.664 21.7957 139.225 22.1135 139.839 22.2707C140.646 22.4683 141.476 22.5601 142.306 22.5436H142.261ZM121.124 6.5482V22.3503H122.864V15.029H131.96V22.3503H133.699V6.5482H131.96V13.3692H122.864V6.5482H121.124ZM108.731 1.93262H107.878C107.876 2.71313 108.164 3.46669 108.685 4.04714C109.272 4.53608 110.027 4.77672 110.789 4.71788C111.556 4.77988 112.318 4.54371 112.915 4.05851C113.428 3.47009 113.708 2.71348 113.7 1.93262H112.835C112.83 2.15111 112.778 2.36589 112.682 2.56215C112.585 2.75841 112.448 2.93149 112.278 3.06946C111.832 3.34221 111.311 3.46934 110.789 3.43325C110.263 3.46798 109.739 3.34104 109.288 3.06946C109.117 2.93306 108.978 2.76031 108.882 2.5637C108.785 2.3671 108.734 2.15154 108.731 1.93262ZM104.285 6.5482V22.3503H106.98L115.553 8.21935V22.3503H117.292V6.5482H114.598L106.025 20.6564V6.5482H104.285ZM98.2819 16.7798H91.4599L94.5866 8.25346H95.1551L98.2819 16.7798ZM93.4155 6.5482L87.5486 22.3503H89.3678L90.8459 18.3031H98.8049L100.306 22.3503H102.114L96.2808 6.5482H93.4155ZM71.8808 20.8951L72.0173 22.5663C72.6745 22.5249 73.3165 22.3509 73.9047 22.0547C74.421 21.7796 74.868 21.3909 75.2122 20.9179C75.5603 20.4171 75.8075 19.8534 75.9399 19.2581C76.0959 18.5642 76.1722 17.8548 76.1673 17.1436V8.21935H83.626V22.3503H85.3656V6.5482H74.4732V16.7002C74.4759 17.1977 74.4493 17.695 74.3936 18.1895C74.3517 18.6445 74.2365 19.0899 74.0525 19.5082C73.8766 19.8913 73.6067 20.2236 73.268 20.4745C72.8532 20.7398 72.3731 20.8854 71.8808 20.8951ZM57.0999 6.5482V22.3503H58.8395V15.029H67.9355V22.3503H69.6751V6.5482H67.9014V13.3692H58.8054V6.5482H57.0999ZM46.5486 7.95788H47.5264C48.3109 7.95788 48.9931 7.95788 49.5616 8.04883C50.1214 8.11621 50.6482 8.34984 51.0738 8.71956C51.469 9.0638 51.7239 9.5412 51.7901 10.061C51.8861 10.754 51.9279 11.4534 51.9152 12.1528V16.7002C51.9252 17.3992 51.8872 18.0981 51.8015 18.792C51.7391 19.3041 51.4877 19.7744 51.0966 20.1107C50.662 20.4823 50.1286 20.7193 49.5616 20.7928C48.8858 20.8666 48.2062 20.9007 47.5264 20.8951H46.5486C45.8725 20.9008 45.1967 20.8666 44.5247 20.7928C43.961 20.7197 43.4311 20.4825 43.0011 20.1107C42.6091 19.7784 42.3539 19.3126 42.2848 18.8034C42.1836 18.107 42.138 17.4038 42.1484 16.7002V12.221C42.1384 11.5137 42.184 10.8067 42.2848 10.1065C42.3512 9.59314 42.6066 9.12294 43.0011 8.78777C43.4321 8.41952 43.962 8.18624 44.5247 8.11704C45.1949 8.01799 45.8711 7.96481 46.5486 7.95788ZM46.0483 22.5436H48.0494C48.9473 22.5636 49.8444 22.4758 50.7213 22.2821C51.3794 22.135 51.9872 21.8175 52.4837 21.3612C52.9463 20.9 53.2762 20.3228 53.4388 19.6901C53.6519 18.8546 53.7514 17.9942 53.7344 17.1322V11.7663C53.7519 10.8967 53.6525 10.0288 53.4388 9.18567C53.2797 8.55487 52.9492 7.9804 52.4837 7.52588C51.985 7.07508 51.3777 6.76167 50.7213 6.61641C49.8402 6.42402 48.9399 6.33248 48.038 6.34356H46.0483C45.1501 6.33175 44.2536 6.4233 43.3764 6.61641C42.7173 6.76088 42.1089 7.07879 41.614 7.53725C41.1411 7.99237 40.8062 8.57158 40.6476 9.20841C40.4282 10.0427 40.3287 10.904 40.3519 11.7663V17.1322C40.3287 17.9945 40.4282 18.8558 40.6476 19.6901C40.8084 20.326 41.1431 20.9046 41.614 21.3612C42.1089 21.8197 42.7173 22.1376 43.3764 22.2821C44.2532 22.4764 45.1504 22.5642 46.0483 22.5436Z" fill="#262526"></path></svg>
            </div>
            <div class="col-8" style="width: 1250px" >
                <div class="input-group mb-3"  style="margin-left: 130px; margin-right: 10px">
                    <input type="text" class="form-control" placeholder="Введите название или артикул товара, который вы ищете">
                    <div>
                        <button class="search" type="button">Поиск <i><svg width="15px" height="15px" viewBox="0 0 20 20" fill="none"><path d="M16.1434 8.57147C16.1434 12.7531 12.7535 16.1429 8.57171 16.1429C4.38994 16.1429 1 12.7531 1 8.57147C1 4.38989 4.38994 1 8.57171 1C12.7535 1 16.1434 4.38989 16.1434 8.57147Z" stroke-width="2" stroke="currentColor"></path> <path d="M20 19.9995L14.1665 14.1662" stroke-width="2" stroke="currentColor"></path></svg></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-auto" style="margin-left: 50px">
                <a style="font-size: small;"><div class="ups"><i><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" color="black"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></i></div>Избранное</a>
            </div>
            <div class="col-md-auto">
                <div class="ups" style="padding-top: 15px;"><img style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="1.png" width="70%">Корзина</div>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <div>
                        <button class="search1" type="button"><b>Регистрация</b></button>
                    </div>
                </div>
            </div>
            <div class="col-md-auto" style="padding-top: 8px;padding-right: 10px;">
                <a class="enter">Войти<svg width="20" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.33331 14.1666L12.5 9.99998L8.33331 5.83331" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.5 10H2.5" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
            </div>
        </div>
    </div>
</div>
</div>
<main class="main">
    <div class="row" style="border-bottom: 2px solid rgb(240,240,240); height: 35px;background-color: white">
        <div class="col-md-auto" style="margin-left: 45px;">
            <button class="butg">Главная</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg">Электрика</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg">Трансформаторы</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg">Трансформаторы напряжения</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg">Phaseo</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg">Schneider Electric</button> ·
        </div>
        <div class="col-md-auto">
            <button class="butg" style="color: black">Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA</button>
        </div>
    </div>
    <div class="pol"></div>
    <div class="maind">

        <form action="" method="get" class="form2">
            <h3>Фильтр</h3>
            <p>Имя товара</p>
            <input type="text" name="name1" class="fil" value="<?php if(isset($_GET['name1'])) {echo $_GET['name1'];}  ?>">
            <p>Описание</p>
            <textarea name="description"><?php if(isset($_GET['description'])) {echo $_GET['description'];} ?></textarea>
            <p>Стоимость от</p>
            <input type="text" name="cost" value="<?php if(isset($_GET['cost'])) {echo $_GET['cost'];}  ?>">
            <p>Поставщик</p>
            <input type="text" name="name" value="<?php if(isset($_GET['name'])) {echo $_GET['name'];}  ?>">
            <br>
            <br>
            <button type="submit" class="searchb">Поиск</button>
            <br>
            <br>
            <button type="submit" class="searchb" name="clear_filter">Очистить</button>
        </form>

        </table>

        <?php if(count($prods) > 0):?>
            <table class="as">
                <tr>
                    <th>Изображение</th>
                    <th>Наименование</th>
                    <th>Поставщик</th>
                    <th>Описание</th>
                    <th>Стоимость</th>
                </tr>
                <?php foreach ($prods as $prod): ?>
                    <tr>
                        <td class="timg"><?= "<img style='width: 200px' src=img/$prod[1]>";?></td>
                        <td class="tname"><?= $prod[2] ?></td>
                        <td class="tbrand"><?= $prod[5] ?></td>
                        <td class="tdesc"><?= $prod[3] ?></td>
                        <td class="tcost"><?= $prod[4] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</main>
<div class="pol"></div>
<div class="basement">
    <div class="row">
        <div class="column">
            <h6>Все категории</h6>
            <p>Электрика</p>
            <p>Дерево</p>
            <p>Складское оборудование</p>
            <p>Климат, водоснабжение</p>
            <p>Инструменты</p>
        </div>
        <div class="column">
            <h6>  &nbsp; </h6>
            <p>Строительные материалы</p>
            <p>Металл</p>
            <p>Химия, нефтепродукты, сырье</p>
            <p>Промышленное оборудование</p>
            <p>Безопасность</p>
        </div>
        <div class="column">
            <h6>Информация</h6>
            <p>О проекте</p>
            <p>Тарифы</p>
            <p>Поставщики</p>
        </div>
        <div class="column">
            <h6>Контакты</h6>
            <p id="disabled1" style="margin-bottom: 1px">Телефон</p>
            <p style="font-size: medium"><b>8 800 550 67 61</b></p>
            <p id="disabled" style="margin-bottom: 1px; margin-top: 20px">Электронная почта для связи</p>
            <p style="font-size: medium"><b>mail@onlinesklad.ru</b></p>
            <p> </p>
        </div>
    </div>
</div>
<div class="last">
    <div class="row" >
        <div class="col-md-auto" style="margin-left: 45px;">
            <button class="butn">Работа с сайтом</button>
        </div>
        <div class="col-md-auto">
            <button class="butn">Пользовательское соглашение</button>
        </div>
        <div class="col-md-auto">
            <button class="butn">Согласие на обработку, хранение и использование персональных данных</button>
        </div>
        <div class="col-md-auto">
            <button class="butn">Политика ООО «ОНЛАЙНСКЛАД» в отношении обработки персональных данных</button>
        </div>
        <div class="col-md-auto">
            <button class="butn">Реквизиты и контакты</button>
        </div>
        <div style="width: 250px">
        </div>
        <div class="col-md-auto">
            © 2022 ООО "ОНЛАЙНСКЛАД"
        </div>
    </div>
</div>
</div>
</body>
</html>