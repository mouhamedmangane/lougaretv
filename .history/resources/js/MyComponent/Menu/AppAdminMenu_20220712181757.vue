<template>
  <div class="flex items-center justify-between bg-red-700 text-white">
      <div class="flex items-center">
          <div>
              <material-icon nom="burger"/>
          </div>
           <nav>
                <ul class="list-none flex">
                    <li v-for="lien in liens"
                        class="">
                        <a :href="lien.url">{{lien.nom}}</a>
                    </li>
                </ul>
            </nav>
      </div>
      <div class="flex justify-end">
            <button>
                <material-icon nom="person" />
            </button>
      </div>


  </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
  data(){
      return {
          liens:[
              {
                  nom:'Article',
                  url:'lougare_npl/article'
              },
              {
                  nom:'Pages',
                  url:'lougare_npl/pages'
              },
              {
                  nom:'Programme TV',
                  url:'lougare_npl/programetv'
              },
              {
                  nom:'Publicité',
                  url:'lougare_npl/publicite'
              },

          ]
      }
  },

}
</script>

<style>

</style>
