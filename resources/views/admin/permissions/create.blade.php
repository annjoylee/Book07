@extends('layouts.admin')

@section('content')
  <h1 class="title is-4">新增權限</h1>

  <div class="box" id="permission-create-form">
    <form action="{{ route('permissions.store') }}" method="POST" role="form" novalidate>
    {{ csrf_field() }}

      <div class="block">
        <b-radio v-model="permissionType" name="permission_type" native-value="basic">基本權限</b-radio>
        <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD權限</b-radio>
      </div>

      <div class="field" v-if="permissionType == 'basic'">

        <div class="columns">
          <div class="column">
            <div class="field">
              <label for="display_name" class="label">名稱</label>
              <div class="control">
                <input class="input" type="text" name="display_name" id="display_name" placeholder="此權限的顯示名稱">
              </div>
            </div>

            <div class="field">
              <label for="name" class="label">slug</label>
              <div class="control">
                <input class="input" type="text" name="slug" id="slug" placeholder="此權限的slug">
              </div>
            </div>

            <div class="field">
              <label for="description" class="label">權限描述</label>
              <div class="control">
                <input class="input" type="text" name="description" id="description" placeholder="描述此權限內容">
              </div>
            </div>
          </div>
          <div class="column">
            <div class="content">
              <h5>說明</h5>
              <p>之後補上</p>
            </div>
          </div>
        </div> {{--end of columns--}}

      </div>{{--end of basic permission--}}

      <div class="field" v-if="permissionType == 'crud'">
        <div class="columns">

          <div class="column is-one-third">
            <div class="field">
              <label for="resource" class="label">CRUD物件名稱</label>
              <div class="control">
                <input class="input" type="text" name="resource" id="resource" placeholder="此權限CRUD指令的物件名稱" v-model="resource">
                <p class="help">物件名稱必須大於3個英文字母</p>
              </div>
            </div>

            <div class="field">
              <div class="field">
                <div class="control">
                  <b-checkbox v-model="crudOptions" name="crud_options[]" native-value="create">Create 新增</b-checkbox>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <b-checkbox v-model="crudOptions" name="crud_options[]" native-value="read">Read 讀取</b-checkbox>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <b-checkbox v-model="crudOptions" name="crud_options[]" native-value="update">Update 更新</b-checkbox>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <b-checkbox v-model="crudOptions" name="crud_options[]" native-value="delete">Delete 刪除</b-checkbox>
                </div>
              </div>
            </div>
          </div>

          <div class="column">
            <table class="table" v-if="resource.length >= 3 && crudOptions.length > 0">
              <thead>
                  <th>權限名稱</th>
                  <th>Slug</th>
                  <th>描述</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudOptions">
                    <td v-text="crudName(item)"></td>
                    <td v-text="crudSlug(item)"></td>
                    <td v-text="crudDescription(item)"></td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div> {{--end of columns--}}
      </div>{{--end of CRUD permission--}}

      <div class="field">
        <div class="control">
          <button class="button is-info is-fullwidth" type="submit" name="button">新增</button>
        </div>
      </div>

    </form>
  </div>
@endsection


@section('scripts')
  <script>
    var adminMenu = new Vue({
      el: '#admin-menu',
      data: {
        isOpen: true //side-menu
      }
    })
    var permissionCreateForm = new Vue({
      el: '#permission-create-form',
      data: {
        permissionType: 'crud',
        resource: '',
        crudOptions: ['create', 'read', 'update', 'delete']
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        }
      }
    })
  </script>
@endsection
