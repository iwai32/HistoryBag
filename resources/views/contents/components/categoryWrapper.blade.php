<div class="contents-category-wrapper">
  <div class="category-select-wrapper">
    <select class="select" name="select" @change="categorySelected">
      <option selected="selected" disabled>未分類</option>
      <option value="HTML">HTML</option>
      <option value="CSS">CSS</option>
      <option value="JavaScript">JavaScript</option>
      <option value="PHP">PHP</option>
      <option value="SQL">SQL</option>
      <option value="AWS">AWS</option>
      <option value="Linux">Linux</option>
      <option value="その他">その他</option>
    </select>
  </div>

  <ul class="category-tag-wrapper">
    <li class="category-tag" v-for="(category, key) in categories">
      <p class="tag" v-cloak>@{{ category }}</p>
      <span class="delete-btn"
      @click="deleteCategoryTag(key)"
      v-cloak><i class="far fa-times-circle"></i></span>
      <input class="input-hidden" type="checkbox" name="category[]" 
      :value="category" checked>
    </li>
  </ul>
</div>