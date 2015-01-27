  <html>
  <head>
   <!-- Custom styles for this template -->
    <link href="[_ROOT_DIR]/public/css/request_add.css" rel="stylesheet">
  </head>

  <body>

<h1 class="page-header">Новая заявка</h1>
          <form class="request_add">

            <div class="row">

              <div class="col-xs-7">
                <label class="">Клиент:</label>
                  <select class="form-control" placeholder="Выберите клиента">
                  <option>Выберите клиента</option>
                   <option>Газель 1,5т.</option>
                   <option>Бычок 3т.</option>
                   <option>Зил 5т.</option>
                   <option>Камаз 10т.</option>
                   <option>Фура 20т.</option>
                  </select>
              </div>
              <div class="col-xs-5">
                <label class="">Тип т/с:</label>
                  <select class="form-control">
                   <option>Выберите тип т/c</option>
                   <option>Газель 1,5т.</option>
                   <option>Бычок 3т.</option>
                   <option>Зил 5т.</option>
                   <option>Камаз 10т.</option>
                   <option>Фура 20т.</option>
                  </select>
              </div>
            </div>

            <div class="row">

              <div class="col-xs-7">
                <label class="">Маршрут:</label>
                <input type="text" class="form-control" placeholder="Адрес загрузки">
              </div>
              <div class="col-xs-5">
                <label class="">Контактная информация:</label>
                <input type="text" class="form-control" placeholder="Грузоотправитель">
              </div>
            </div>

            <div class="row">
            
              <div class="col-xs-7">
                <input type="text" class="form-control" placeholder="Адрес разгрузки">
              </div>
              <div class="col-xs-5">
                <input type="text" class="form-control" placeholder="Грузополучатель">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-4">
                <label class="">Наименование груза:</label>
                <input type="text" class="form-control" placeholder="Наименование груза">
              </div>
              <div class="col-xs-4">
                <label class="">Вес:</label>
                <input type="text" class="form-control" placeholder="Вес">
              </div>
              <div class="col-xs-4">
                <label class="">Объем:</label>
                <input type="text" class="form-control" placeholder="Объем">
              </div>
            </div>

              <div class="row"> 
              <div class="col-xs-7">
                <label class="">Исполнитель:</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>

              <div class="col-xs-5">
                <label class="">ФИО водителя:</label>
                <input type="text" class="form-control" placeholder="Водитель">
              </div>
             </div>

            <div class="row">  
              <div class="col-xs-7">
                <label class="">Паспорт:</label>
                <input type="text" class="form-control" placeholder="Паспорт">
              </div>
              <div class="col-xs-5">
                <label class="">Марка и гос. номер т/с:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>

            <label class="">Примечание:</label>
            <textarea class="form-control"></textarea>

            <button class="btn btn-lg btn-success btn-block">Создать</button>
          </form>
          </div>
          </body></html>