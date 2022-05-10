<h3 style="text-align: center";>Изучаем язык программирования Python</h3>

<head>
<style>
    .tabs {
      max-width: 950px;
      margin-left: auto;
      margin-right: auto;
    }

    .tabs {
      border: 1px solid lightgray;
    }

    .tabs__nav {
      display: flex;
      flex-wrap: wrap;
      list-style-type: none;
      background: #f8f8f8;
      margin: 0;
      border-bottom: 1px solid lightgray;
    }

    .tabs__link {
      padding: 0.5rem 0.75rem;
      text-decoration: none;
      color: black;
      text-align: center;
      flex-shrink: 0;
      flex-grow: 1;
    }

    .tabs__link_active {
      background: lightgray;
      cursor: default;
    }

    .tabs__link:not(.tabs__link_active):hover,
    .tabs__link:not(.tabs__link_active):focus {
      background-color: #1e94ea;
    }

    .tabs__content {
      padding: 1rem;
    }

    .tabs__pane {
      display: none;
    }

    .tabs__pane_show {
      display: block;
    }
  </style>

</head>

<body>

  <div class="tabs">
    <div class="tabs__nav">
      <a class="tabs__link tabs__link_active" href="#content-1">Блок 1</a>
      <a class="tabs__link" href="#content-2">Блок 2</a>
      <a class="tabs__link" href="#content-3">Блок 3</a>
      <a class="tabs__link" href="#content-4">Блок 4</a>
      <a class="tabs__link" href="#content-5">Блок 5</a>
      <a class="tabs__link" href="#content-6">Блок 6</a>
      <a class="tabs__link" href="#content-7">Блок 7</a>
    </div>
    <div class="tabs__content">
      <div class="tabs__pane tabs__pane_show" id="content-1">
        <h2> Неполный и вложенный условные операторы</h2>
        <img src="views/pages/tasks/1-1.png">
      </div>
      <div class="tabs__pane" id="content-2">
        <h2> Условные операторы. Уровень 1</h2>
        <img src="views/pages/tasks/1-2.png">
      </div>
      <div class="tabs__pane" id="content-3">
        <h2> Условные операторы. Уровень 2</h2>
        <img src="views/pages/tasks/1-3.png">
      </div>
            <div class="tabs__pane" id="content-4">
        <h2> Вычисление значения функции</h2>
        <img src="views/pages/tasks/1-4.png">
      </div>
            <div class="tabs__pane" id="content-5">
        <h2> Оператор выбора</h2>
        <img src="views/pages/tasks/1-5.png">
      </div>
            <div class="tabs__pane" id="content-6">
        <h2> Циклы</h2>
        <img src="views/pages/tasks/1-6.png">
      </div>
            <div class="tabs__pane" id="content-7">
        <h2> Обработка числовых последовательностей</h2>
        <img src="views/pages/tasks/1-7.png">
      </div>
      
    </div>
  </div>

  <script>
    var $tabs = function (target) {
      var
        _elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
        _eventTabsShow,
        _showTab = function (tabsLinkTarget) {
          var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
          tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
          tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.tabs__link_active');
          tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.tabs__pane_show');
          // если следующая вкладка равна активной, то завершаем работу
          if (tabsLinkTarget === tabsLinkActive) {
            return;
          }
          // удаляем классы у текущих активных элементов
          if (tabsLinkActive !== null) {
            tabsLinkActive.classList.remove('tabs__link_active');
          }
          if (tabsPaneShow !== null) {
            tabsPaneShow.classList.remove('tabs__pane_show');
          }
          // добавляем классы к элементам (в завимости от выбранной вкладки)
          tabsLinkTarget.classList.add('tabs__link_active');
          tabsPaneTarget.classList.add('tabs__pane_show');
          document.dispatchEvent(_eventTabsShow);
        },
        _switchTabTo = function (tabsLinkIndex) {
          var tabsLinks = _elemTabs.querySelectorAll('.tabs__link');
          if (tabsLinks.length > 0) {
            if (tabsLinkIndex > tabsLinks.length) {
              tabsLinkIndex = tabsLinks.length;
            } else if (tabsLinkIndex < 1) {
              tabsLinkIndex = 1;
            }
            _showTab(tabsLinks[tabsLinkIndex - 1]);
          }
        };

      _eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });

      _elemTabs.addEventListener('click', function(e) {
        var target = e.target.closest('.tabs__link');
        // завершаем выполнение функции, если кликнули не по ссылке
        if (!target) {
          return;
        }
        // отменяем стандартное действие
        e.preventDefault();
        _showTab(target);
      });

      return {
        showTab: function (target) {
          _showTab(target);
        },
        switchTabTo: function (index) {
          _switchTabTo(index);
        }
      }

    };

    $tabs('.tabs');
  </script>
  
  <center>

<iframe src="https://www.online-python.com/" width="950" height="950" scrolling="no"> </iframe>
<!--<iframe src="https://www.programiz.com/python-programming/online-compiler/" width="650" height="600" scrolling="auto"> </iframe>

</center>

</body>