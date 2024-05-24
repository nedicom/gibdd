

<!-- Кнопка-триггер модального окна (вставить в основную форму)
//<button type="button" class="btn  btn-lg" data-bs-toggle="modal" data-bs-target="#mapModal">
//<i class="pr-3 bi bi-pin-map"></i> Республика Крым, г. Симферополь</div>
//</button>-->
<!-- Модальное окно -->
  <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mapModalLabel">Как добраться</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <!-- форма для модального -->
        <div class="row text-center">
          <div class="col-md-4">
            <img src="src/popup_map/map.jpg" width="300" height="300"  class="img-fluid" alt="...">
          </div>
          <div class="col-md-8">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af656829d54430f3c7f23ae0313146d2525f75dfbaffa3e083f51d06d98a33614&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
        </div>
        </div>

          <div class="modal-footer">
            <button href="https://yandex.ru/maps/-/CCUVqZgI9D" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <a href="https://yandex.ru/maps/-/CCUVqZgI9D" type="button" class="btn btn-primary" target="_blank">Построить маршрут</a>
          </div>
        </div>
      </div>
    </div>
  <!-- скрипт дизэйбл кнопки в модальном окне-->
  <script type="text/javascript">
    function stoppedTyping(){
      var keys =  document.getElementById('phonebtn').value;
      if(keys.length > 9) {
        document.getElementById("btngo").disabled = false;
      } else {
        document.getElementById("btngo").disabled = true;
      }
    }

  </script>
