module.exports = {
    root: true,
    globals: {
      NodeJS: true
    },
    env: {
      node: true,
      es2022: true
    },
    extends: [
        "eslint:recommended",
        "plugin:vue/vue3-recommended",
        "@vue/typescript/recommended",
        "plugin:prettier/recommended",
    ],
    parserOptions: {
      ecmaVersion: 2020
    },
    rules: {
      "@typescript-eslint/no-explicit-any": "off",
      "vue/multi-word-component-names": "off",
      "vue/max-attributes-per-line": "off",
    },
    overrides: [
      {
        files: ["**/__tests__/*.{j,t}s?(x)", "**/tests/unit/**/*.spec.{j,t}s?(x)"],
        env: {
          mocha: true
        }
      }
    ]
  };