<template>
    <div class="container">
        <a href="customer/create" class="btn btn-primary">添加合作客户</a>
        <div class="row" v-for="d in data">
            <div class="col-md-12">
                <a :href="'customer/' + d.id + '/edit' ">{{d.title}}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'customer-index',
      props: {
          data: Array
      }
    }
</script>
