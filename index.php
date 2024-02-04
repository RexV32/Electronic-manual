<!DOCTYPE html>
<html class="page" lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>ЭМКУ</title>
</head>
<body class="page__body">
  <header class="header">
    <div class="header__wrapper">
      <nav class="header__nav">
        <a class="header__logo-link" href="index.html">
          <h1 class="visually-hidden">ЭМКУ</h1>
          <picture>
            <source media="(min-width:768px)" srcset="./image/content/logo__desktop.svg">
            <img class="header__logo-image" src="./image/content/logo__mobile.svg" alt="Логотип ЭМКУ">
          </picture>
        </a>
        <ul class="header__user-list">
          <li class="header__user-item">
            <a class="header__link" href="#">Панель администратора</a>
          </li>
          <li class="header__user-item">
            <a class="header__link" href="#">Выйти</a>
          </li>
        </ul>
        <div class="menu">
          <div class="menu__wrapper">
            <ul class="menu__user-list">
              <li class="menu__user-item">
                <button class="menu__button" type="button">
                  <span class="visually-hidden">Закрыть меню</span>
                </button>
              </li>
              <li class="menu__user-item">
                <a class="menu__user-link" href="#">Панель администратора</a>
              </li>
              <li class="menu__user-item">
                <a class="menu__user-link" href="#">Выйти</a>
              </li>
            </ul>
            <div class="dropmenu">
              <div class="dropmenu__wrapper">
                <ul class="dropmenu__list">
                  <li class="dropmenu__item">
                    <button class="dropmenu__button" type="button">
                      МДК 04.04
                    </button>
                    <ul class="dropmenu__menu">
                      <li class="dropmenu__menu-item dropmenu__menu-item--current">
                        <a class="dropmenu__link" href="#">Практика</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Теория</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Тесты</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Глосарий</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Доп.материалы</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropmenu__item">
                    <button class="dropmenu__button" type="button">
                      МДК 04.03
                    </button>
                    <ul class="dropmenu__menu">
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Практика</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Теория</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Тесты</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Глосарий</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Доп.материалы</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropmenu__item">
                    <button class="dropmenu__button" type="button">
                      Демо
                    </button>
                    <ul class="dropmenu__menu">
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Практика</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Теория</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Тесты</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Глосарий</a>
                      </li>
                      <li class="dropmenu__menu-item">
                        <a class="dropmenu__link" href="#">Доп.материалы</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>
          </div>
        </div>
        <button class="header__toggle-button" type="button">
          <span class="visually-hidden">Открыть меню</span>
        </button>
      </nav>
    </div>
  </header>
  <main class="main page__main">
    <div class="main__wrapper">
      <section class="main__nav-section main__nav-section--padding">
        <h2 class="visually-hidden">Навигация</h2>
        <nav class="main__navigation">
          <ul class="dropmenu__list">
            <li class="dropmenu__item">
              <button class="dropmenu__button" type="button">
                МДК 04.04
              </button>
              <ul class="dropmenu__menu">
                <li class="dropmenu__menu-item dropmenu__menu-item--current">
                  <a class="dropmenu__link" href="#">Практика</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Теория</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Тесты</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Глосарий</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Доп.материалы</a>
                </li>
              </ul>
            </li>
            <li class="dropmenu__item">
              <button class="dropmenu__button" type="button">
                МДК 04.03
              </button>
              <ul class="dropmenu__menu">
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Практика</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Теория</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Тесты</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Глосарий</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Доп.материалы</a>
                </li>
              </ul>
            </li>
            <li class="dropmenu__item">
              <button class="dropmenu__button" type="button">
                Демо
              </button>
              <ul class="dropmenu__menu">
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Практика</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Теория</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Тесты</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Глосарий</a>
                </li>
                <li class="dropmenu__menu-item">
                  <a class="dropmenu__link" href="#">Доп.материалы</a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </section>
      <div class="main__stub">
        <picture>
          <source media="(min-width:768px)" srcset="./image/content/stub__desktop.jpg">
          <img class="main__stub-image" src="./image/content/stub__mobile.jpg" alt="Выберите раздел">
        </picture>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__wrapper">
      <section class="footer__contacts">
        <h2 class="footer__contacts-title">Контактные данные:</h2>
        <ul class="footer__contacts-list">
          <li class="footer__contacts-item">
            <address class="footer__address footer__address--mark">г. Кемерово, ул. Павленко 1А</address>
          </li>
          <li class="footer__contacts-item">
            <a class="footer__link footer__link--telephone" href="tel:73842570107">+7 (3842) 57-01-07</a>
          </li>
          <li class="footer__contacts-item">
            <a class="footer__link footer__link--mail" href="mailto:guospospt@yandex.ru">guospospt@yandex.ru</a>
          </li>
        </ul>
      </section>
      <section class="footer__social">
        <h2 class="visually-hidden">Социальные сети</h2>
        <ul class="footer__social-list">
          <li class="footer__social-item">
            <a class="footer__social-link footer__social-link--1C" href="https://1c.ru/">
              <span class="visually-hidden">Официальный сайт 1С</span>
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link footer__social-link--telegram" href="https://t.me/spt42">
              <span class="visually-hidden">СПТ42 телеграмм канал</span>
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link footer__social-link--VK" href="https://vk.com/spt42">
              <span class="visually-hidden">СПТ42 группа ВКонтакте</span>
            </a>
          </li>
        </ul>
      </section>
      <section class="footer__copyright">
        <h2 class="visually-hidden">Сибирский политехнический техникум</h2>
        <img class="footer__copyright-image" src="./image/content/spt42.jpg" alt="Сибирский политехнический техникум">
      </section>
    </div>
  </footer>
  <script src="./js/dropmenu.js"></script>
  <script src="./js/menu.js"></script>
</body>
</html>
