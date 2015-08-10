# WEIPDCRM #
Darwin Cydia Repository Manager

Это панель управления репозиторием с открытм исходным кодом для Saurik's Cydia™.  
Эта программа - ремэйк "[DCRM](https://github.com/tibounise/DCRM)", и мы добавили около 95% функций в эту замечательную панель.

##Посмотреть онлайн:
0.  http://cydia.shlyahten.ru - w/ Russian
1.  http://apt.82flex.com
2.  http://apt.touchsprite.com
3.  http://apt.phoneai.cn
4.  http://cydia.so
5.  http://cydia.minwenlsm.pw

##Системные требования:
1. PHP Version >= 5.3 и MySQL
2. Поддержка GD и BZ2
3. Nginx, Apache или Lighttpd

##Установка и использование:
1.  Загрузите содержимое `/main/*` в свой wwwroot (корень) затем дайте файлам разрешения на чтение и запись (CHMOD).
2.  **Nginx:** Скопируйте `/readme.files/dcrm_nginx.conf` в Nginx's директорию с настройками, затем включите в конфигурацию сайта.<br/>**Lighttpd:** Включите `/readme.files/dcrm_lighttpd.conf`.
3.  Перезагрузите сервер если это требуется.
4.  Откройте `http://{YOUR_REPO_URL}/install` для преднастройки и установки DCRM.
5.  Затем войдите `http://{YOUR_REPO_URL}/manage`.
6.  Заполните пустые поля `http://{YOUR_REPO_URL}/manage/settings.php` и `http://{YOUR_REPO_URL}/manage/release.php`
7.  Загрузите deb пакет и импортируйте его либо замените старую версию новой, теперь вы можете изменять информацию *(такую как Identifier, Author, Name, Depends, etc.)*.
8.  Свободно изменяйте пакет, нажимайте на заголовок каждого поля и он заполнится автоматически. WEIPDCRM имеет хорошую страницу описания, и вы можете добавить туда скриншотов нажав на заголовок пакета.
9.  Нажмите "*Показать пакет*" или "*Скрыть пакет*" чтобы сделать его видимым или нет.
10.  Когда всё готово, нажмите "*Пересобрать*" в правом верхнем углу.
11.  Add your repository in Cydia™.

##License
Copyright © 2013-2015 Zheng Wu & Hintay
    
The program is distributed under the terms of the GNU Affero General Public License.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.

We also offer a commercial license and technical supports, contact i.82@me.com for more details.
