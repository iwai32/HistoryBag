require('./bootstrap');
import Vue from 'vue';


const app = new Vue({
  el:'#app',
  data: {
    categories: []
  },
  methods: {
    /**カテゴリータグ */
    categorySelected($select) {
      let targetVal = $select.target.value
      /*同じ値が含まれていないなら格納する */
      if (!this.categories.includes(targetVal)) {
        this.categories.push(targetVal)
      }
    },
    deleteCategoryTag(key) {
      this.categories.splice(key, 1)
    }
  }
})