module.exports = {
  root: true,
  env: {
    browser: true,
    node: true,
  },
  extends: [
    'plugin:vue/vue3-essential', // oder 'vue3-recommended' je nach Strenge
    'eslint:recommended',
  ],
  parser: 'vue-eslint-parser',
  parserOptions: {
    parser: '@babel/eslint-parser', // oder '@typescript-eslint/parser' wenn TypeScript
    requireConfigFile: false,
    ecmaVersion: 'latest',
    sourceType: 'module',
  },
  rules: {
    'vue/multi-word-component-names': 'off',
  },
}