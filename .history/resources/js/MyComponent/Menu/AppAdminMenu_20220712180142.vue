<template>
  <div class="flex items-center">
      <div class="flex">
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
