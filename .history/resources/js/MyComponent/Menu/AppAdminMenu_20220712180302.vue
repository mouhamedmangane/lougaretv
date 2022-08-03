<template>
  <div class="flex items-center justify between">
      <div class="flex items-center">
          <div>
              <material-icon :nom="burger"/>
          </div>
           <nav>
                <ul class="list-none flex">
                    <li class="">Article</li>
                    <li class="">Pages</li>
                    <li class="">Programme TV</li>
                    <li class="">Publicité</li>
                </ul>
            </nav>
      </div>
      <div class="flex justify-end">
            <button>
                <material-icon :nom="person" />
            </button>
      </div>


  </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },

}
</script>

<style>

</style>
