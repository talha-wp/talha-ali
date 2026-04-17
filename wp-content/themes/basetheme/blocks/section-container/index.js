/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/buttons.jsx":
/*!*************************!*\
  !*** ./src/buttons.jsx ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__);





(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockStyle)('core/button', {
  label: 'Fill Boxed',
  name: 'fill-boxed'
});
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockStyle)('core/button', {
  label: 'Outline Boxed',
  name: 'outline-boxed'
});
function addCustomAttributes(settings, name) {
  if ('core/button' === name) {
    if (settings.attributes) {
      settings.attributes.size = {
        type: 'string',
        default: ''
      };
    }
  }
  return settings;
}
wp.hooks.addFilter('blocks.registerBlockType', 'core/spacer', addCustomAttributes);
const withCoreButton = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__.createHigherOrderComponent)(BlockEdit => {
  return props => {
    const {
      attributes,
      setAttributes
    } = props;
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.unregisterBlockStyle)('core/button', 'outline');
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.unregisterBlockStyle)('core/button', 'fill');
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.Fragment, {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(BlockEdit, {
        ...props
      })
    });
  };
}, 'withCoreButton');
wp.hooks.addFilter('editor.BlockEdit', 'core/spacer', withCoreButton);

/***/ }),

/***/ "./src/components/DesignOption.jsx":
/*!*****************************************!*\
  !*** ./src/components/DesignOption.jsx ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ DesignOption)
/* harmony export */ });
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _helper_useImage_jsx__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../helper/useImage.jsx */ "./src/helper/useImage.jsx");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




function DesignOption({
  props,
  value,
  DesignKey,
  options,
  help
}) {
  const {
    setAttributes
  } = props;
  const checkBoxEffect = event => {
    const button = event.target.parentNode;
    const dataValue = button.getAttribute('data-value');
    // Remove the "selected" class from all other buttons
    const buttons = document.querySelectorAll('.design-option-btn');
    buttons.forEach(btn => {
      btn = btn.parentNode;
      if (btn !== button) {
        btn.classList.remove('selected');
      }
    });

    // Toggle the "selected" class for the clicked button
    button.classList.toggle('selected');
    if (button.classList.contains('selected')) {
      setAttributes({
        [DesignKey]: dataValue
      });
    } else {
      setAttributes({
        [DesignKey]: ''
      });
    }
  };
  const getContrastingTextColor = bgColor => {
    // Convert the background color to RGB values
    let rgb = [];
    if (/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.test(bgColor)) {
      // Valid hex color value, convert to RGB
      rgb = bgColor.match(/\w{2}/g).map(hex => parseInt(hex, 16));
    } else if (/^rgb\(\s*\d+\s*,\s*\d+\s*,\s*\d+\s*\)$/.test(bgColor)) {
      // Valid RGB color value
      rgb = bgColor.match(/\d+/g).map(Number);
    }
    const brightness = (rgb[0] * 299 + rgb[1] * 587 + rgb[2] * 114) / 1000; // Calculate brightness
    // Set the text color based on brightness threshold (you can adjust the threshold as needed)
    return brightness > 128 ? '#000000' : '#FFFFFF';
  };
  const Buttons = options.map((element, index) => {
    let selected = 'design-option-item';
    if (value === element.value) {
      selected = 'design-option-item selected';
    }
    let myStyle = {};
    if (element.display.startsWith('#')) {
      myStyle = {
        backgroundColor: element.display,
        color: getContrastingTextColor(element.display),
        fontSize: '20px'
      };
    } else {
      const {
        image
      } = (0,_helper_useImage_jsx__WEBPACK_IMPORTED_MODULE_1__["default"])(element.display);
      if (image) {
        myStyle = {
          backgroundImage: 'url(' + image + ')',
          fontSize: '20px'
        };
      }
    }
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Tooltip, {
        text: element.label,
        position: 'bottom',
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
          className: selected,
          "data-value": element.value,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("button", {
            style: myStyle,
            onClick: event => {
              checkBoxEffect(event);
            },
            className: "design-option-btn",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.RichText.Content, {
              value: element.label
            })
          }, index)
        })
      })
    });
  });
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
      className: "design-option",
      children: Buttons
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("p", {
      className: "components-base-control__help",
      children: help
    })]
  });
}

/***/ }),

/***/ "./src/components/Media.jsx":
/*!**********************************!*\
  !*** ./src/components/Media.jsx ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Media)
/* harmony export */ });
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




function Media({
  props,
  help
}) {
  const {
    attributes,
    setAttributes
  } = props;
  const {
    bgImage
  } = attributes;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: media => {
      setAttributes({
        bgImage: {
          title: media.title,
          filename: media.filename,
          url: media.url,
          isOverlay: false
        }
      });
    },
    allowedTypes: ['image'],
    multiple: false,
    render: ({
      open
    }) => bgImage.url === '' ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        onClick: open,
        className: "is-primary",
        children: "Upload Image"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("p", {
        className: "components-base-control__help",
        children: help
      })]
    }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
      className: "bgImage-ctn",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "image-btn",
        onClick: open,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("img", {
          src: bgImage.url,
          alt: ""
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "dc-media-buttons",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
          onClick: open,
          className: "is-secondary",
          children: "Replace Image"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
          onClick: () => {
            setAttributes({
              bgImage: {
                title: '',
                filename: '',
                url: '',
                isOverlay: false
              }
            });
          },
          className: "is-link is-destructive",
          children: "Remove overlay image"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.ToggleControl, {
        label: "Overlay Class",
        help: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Check if you want to apply overlay class'),
        checked: bgImage.isOverlay,
        onChange: () => {
          const value = !bgImage.isOverlay;
          setAttributes({
            bgImage: {
              title: bgImage.title,
              filename: bgImage.filename,
              url: bgImage.url,
              isOverlay: value
            }
          });
        }
      })]
    })
  });
}

/***/ }),

/***/ "./src/components/Popup.jsx":
/*!**********************************!*\
  !*** ./src/components/Popup.jsx ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Popup)
/* harmony export */ });
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



function Popup({
  props,
  PopupKey,
  PopupValue,
  options,
  ButtonText,
  help
}) {
  const [isOpen, setOpen] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useState)(false);
  const openModal = () => setOpen(true);
  const closeModal = () => setOpen(false);
  const {
    setAttributes
  } = props;
  const getContrastingTextColor = bgColor => {
    // Convert the background color to RGB values
    let rgb = [];
    if (/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.test(bgColor)) {
      // Valid hex color value, convert to RGB
      rgb = bgColor.match(/\w{2}/g).map(hex => parseInt(hex, 16));
    } else if (/^rgb\(\s*\d+\s*,\s*\d+\s*,\s*\d+\s*\)$/.test(bgColor)) {
      // Valid RGB color value
      rgb = bgColor.match(/\d+/g).map(Number);
    }
    const brightness = (rgb[0] * 299 + rgb[1] * 587 + rgb[2] * 114) / 1000; // Calculate brightness
    // Set the text color based on brightness threshold (you can adjust the threshold as needed)
    return brightness > 128 ? '#000000' : '#FFFFFF';
  };
  const checkBoxEffect = event => {
    const button = event.target.parentNode;
    let dataValue = button.getAttribute('data-value');
    if (typeof dataValue === 'undefined') {
      dataValue = '';
    }
    // Remove the "selected" class from all other buttons
    const buttons = document.querySelectorAll('.design-option-btn-popup');
    buttons.forEach(btn => {
      btn = btn.parentNode;
      if (btn !== button) {
        btn.classList.remove('selected');
      }
    });

    // Toggle the "selected" class for the clicked button
    button.classList.toggle('selected');
    if (button.classList.contains('selected')) {
      setAttributes({
        [PopupKey]: dataValue
      });
    } else {
      setAttributes({
        [PopupKey]: ''
      });
    }
    closeModal();
  };
  let savedDisplay = '';
  let savedLabel = '';
  const Buttons = options.map((element, index) => {
    let selected = 'design-option-item';
    if (PopupValue === element.value) {
      selected = 'design-option-item selected';
      savedDisplay = element.display;
      savedLabel = element.label;
    }
    let myStyle = {};
    if (element.display.startsWith('#')) {
      myStyle = {
        backgroundColor: element.display,
        color: getContrastingTextColor(element.display),
        fontSize: '20px'
      };
    } else {
      myStyle = {
        backgroundImage: 'url(' + __webpack_require__("./src/images sync recursive ^\\.\\/.*$")("./" + element.display) + ')'
      };
    }
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Tooltip, {
        text: element.label,
        position: 'bottom',
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
          className: selected,
          "data-value": element.value,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
            style: myStyle,
            onClick: event => {
              checkBoxEffect(event);
            },
            className: "design-option-btn-popup",
            children: element.display.startsWith('#') ? element.label : ''
          }, index)
        })
      })
    });
  });
  let mySavedStyle = {};
  if (savedDisplay) {
    if (savedDisplay.startsWith('#')) {
      mySavedStyle = {
        backgroundColor: savedDisplay,
        color: getContrastingTextColor(savedDisplay),
        fontSize: '20px'
      };
    } else {
      mySavedStyle = {
        backgroundImage: 'url(' + __webpack_require__("./src/images sync recursive ^\\.\\/.*$")("./" + savedDisplay) + ')'
      };
    }
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
    children: [savedDisplay === '' || typeof savedDisplay === 'undefined' ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Button, {
      variant: "secondary",
      onClick: openModal,
      "data-color": "default",
      children: ButtonText
    }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Tooltip, {
        text: savedLabel,
        position: 'bottom',
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
          className: "popup-output",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Button, {
            variant: "secondary",
            className: "popup-btn",
            onClick: openModal,
            style: mySavedStyle,
            children: savedDisplay.startsWith('#') ? savedLabel : ''
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "dc-popup-buttons",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Button, {
          onClick: openModal,
          className: "is-secondary",
          children: "Replace Option"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Button, {
          onClick: () => {
            setAttributes({
              [PopupKey]: ''
            });
          },
          className: "is-link is-destructive",
          children: "Remove Option"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
        className: "components-base-control__help",
        children: help
      })]
    }), isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Modal, {
      isFullScreen: true,
      title: "Shapes",
      onRequestClose: closeModal,
      className: "dc-popup dc-design-shapes",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
        className: "design-option",
        children: Buttons
      })
    })]
  });
}

/***/ }),

/***/ "./src/edit.jsx":
/*!**********************!*\
  !*** ./src/edit.jsx ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Edit)
/* harmony export */ });
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_Media_jsx__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/Media.jsx */ "./src/components/Media.jsx");
/* harmony import */ var _components_Popup_jsx__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/Popup.jsx */ "./src/components/Popup.jsx");
/* harmony import */ var _components_DesignOption_jsx__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/DesignOption.jsx */ "./src/components/DesignOption.jsx");
/* harmony import */ var _editor_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./editor.scss */ "./src/editor.scss");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__);
/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */


/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */





/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param  props
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */

function Edit(props) {
  const {
    attributes,
    setAttributes
  } = props;
  const {
    bgDesignType,
    bgWidth,
    ctnShape,
    className
  } = attributes;
  const myCustomClassName = className ? className : undefined;
  const myCustomWidthClass = bgWidth ? 'content-width-border editor-' + bgWidth : undefined;
  const myCustomDesignClass = bgDesignType ? 'editor-' + bgDesignType : undefined;
  const myCustomShape = ctnShape ? 'editor-' + ctnShape : undefined;
  const classes = [myCustomWidthClass, myCustomDesignClass, myCustomClassName, myCustomShape];
  const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps)({
    className: classes.join(' ')
  });
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("div", {
    ...blockProps,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.InspectorControls, {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Panel, {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
          title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Container Width'),
          initialOpen: true,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelRow, {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RadioControl, {
              help: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Please choose container width.'),
              selected: bgWidth,
              options: [{
                label: 'Width 1180px (Default)',
                value: 'ctn'
              }, {
                label: 'Width 980px',
                value: 'ctn-980'
              }, {
                label: 'Width 760px',
                value: 'ctn-760'
              }],
              onChange: value => setAttributes({
                bgWidth: value
              })
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
          title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Container Design'),
          className: "dc-design-component",
          initialOpen: true,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_components_DesignOption_jsx__WEBPACK_IMPORTED_MODULE_5__["default"], {
            props: props,
            value: bgDesignType,
            DesignKey: "bgDesignType",
            help: "Click to select value",
            options: [{
              label: 'Container Red',
              value: 'ctn-red',
              display: '#ff0000'
            }, {
              label: 'Container Black',
              value: 'ctn-black',
              display: 'ctn-black.png'
            }, {
              label: 'Container Sea Green',
              value: 'ctn-sea-green',
              display: 'ctn-sea-green.png'
            }]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
          title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Container Overlay'),
          className: "dc-media-component",
          initialOpen: true,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelRow, {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_components_Media_jsx__WEBPACK_IMPORTED_MODULE_3__["default"], {
              props: props,
              help: "Please upload the overlay image."
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
          title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Popup Options (Test)'),
          className: "dc-popup-component",
          initialOpen: true,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelRow, {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_components_Popup_jsx__WEBPACK_IMPORTED_MODULE_4__["default"], {
              props: props,
              PopupKey: "ctnShape",
              PopupValue: ctnShape,
              ButtonText: "Click for Options",
              help: "Click to change or remove the value.",
              options: [{
                label: 'Container Light Gray',
                value: 'ctn-lgray',
                display: 'ctn-lgray.png'
              }, {
                label: 'Container White',
                value: 'ctn-white',
                display: 'ctn-white.png'
              }, {
                label: 'Container Green',
                value: 'ctn-green',
                display: '#bfff00'
              }, {
                label: 'Container Purple',
                value: 'ctn-purple',
                display: 'ctn-purple.png'
              }]
            })
          })
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("section", {
      className: [bgDesignType, bgWidth].join(' '),
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.InnerBlocks, {})
    })]
  });
}

/***/ }),

/***/ "./src/helper/useImage.jsx":
/*!*********************************!*\
  !*** ./src/helper/useImage.jsx ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);

const UseImage = fileName => {
  const [loading, setLoading] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(true);
  const [error, setError] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [image, setImage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const fetchImage = async () => {
      try {
        const response = await __webpack_require__("./src/images sync recursive ^\\.\\/.*$")(`./${fileName}`); // change relative path to suit your needs
        console.log(response);
        setImage(response);
      } catch (err) {
        setError(err);
      } finally {
        setLoading(false);
      }
    };
    fetchImage();
  }, [fileName]);
  return {
    loading,
    error,
    image
  };
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (UseImage);

/***/ }),

/***/ "./src/index.jsx":
/*!***********************!*\
  !*** ./src/index.jsx ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./src/style.scss");
/* harmony import */ var _spacers_jsx__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./spacers.jsx */ "./src/spacers.jsx");
/* harmony import */ var _buttons_jsx__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./buttons.jsx */ "./src/buttons.jsx");
/* harmony import */ var _edit_jsx__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./edit.jsx */ "./src/edit.jsx");
/* harmony import */ var _save_jsx__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./save.jsx */ "./src/save.jsx");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./block.json */ "./src/block.json");
/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */



/**
 * Internal dependencies
 */



/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(_block_json__WEBPACK_IMPORTED_MODULE_6__.name, {
  /**
   * @see ./edit.js
   */
  edit: _edit_jsx__WEBPACK_IMPORTED_MODULE_4__["default"],
  /**
   * @see ./save.js
   */
  save: _save_jsx__WEBPACK_IMPORTED_MODULE_5__["default"]
});

/***/ }),

/***/ "./src/save.jsx":
/*!**********************!*\
  !*** ./src/save.jsx ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ save)
/* harmony export */ });
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);
/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */


/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @param  root0
 * @param  root0.attributes
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */

function save({
  attributes
}) {
  const {
    bgImage,
    bgDesignType,
    bgWidth,
    className,
    ctnShape
  } = attributes;
  const myCustomDesignClass = bgDesignType ? bgDesignType : undefined;
  const myCustomShape = ctnShape ? ctnShape : undefined;
  const myCustomWidthClass = bgWidth ? bgWidth : undefined;
  const myCustomClassName = className ? className : undefined;
  let myOverlayClass = '';
  let myStyle = {};
  if (bgImage.isOverlay) {
    myOverlayClass = 'has-overlay';
  }
  if (bgImage.url !== '') {
    myStyle = {
      backgroundImage: 'url(' + bgImage.url + ')'
    };
  }
  const classes = [myCustomDesignClass, myCustomWidthClass, myCustomClassName, myOverlayClass, myCustomShape];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("section", {
    className: classes.join(' '),
    style: myStyle,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "wrapper",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.InnerBlocks.Content, {})
    })
  });
}

/***/ }),

/***/ "./src/spacers.jsx":
/*!*************************!*\
  !*** ./src/spacers.jsx ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);
const {
  createHigherOrderComponent
} = wp.compose;


const withCoreSpacer = createHigherOrderComponent(BlockEdit => {
  return props => {
    const {
      attributes,
      setAttributes
    } = props;
    let {
      height
    } = attributes;
    let defaultValue = '';
    const spacingSizes = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.useSetting)('spacing.spacingSizes');
    for (const key in spacingSizes) {
      const element = spacingSizes[key];
      if (typeof element.default !== 'undefined' && element.default) {
        defaultValue = element.slug;
      }
      break;
    }
    if (height === '100px') {
      setAttributes({
        height: 'var:preset|spacing|' + defaultValue
      });
      height = 'var:preset|spacing|' + defaultValue;
    }
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BlockEdit, {
        ...props
      })
    });
  };
}, 'withCoreSpacer');
wp.hooks.addFilter('editor.BlockEdit', 'core/spacer', withCoreSpacer);

/***/ }),

/***/ "./src/editor.scss":
/*!*************************!*\
  !*** ./src/editor.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/style.scss":
/*!************************!*\
  !*** ./src/style.scss ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/images sync recursive ^\\.\\/.*$":
/*!***********************************!*\
  !*** ./src/images/ sync ^\.\/.*$ ***!
  \***********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./ctn-black.png": "./src/images/ctn-black.png",
	"./ctn-green.png": "./src/images/ctn-green.png",
	"./ctn-lgray.png": "./src/images/ctn-lgray.png",
	"./ctn-purple.png": "./src/images/ctn-purple.png",
	"./ctn-red.png": "./src/images/ctn-red.png",
	"./ctn-sea-green.png": "./src/images/ctn-sea-green.png",
	"./ctn-white.png": "./src/images/ctn-white.png"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./src/images sync recursive ^\\.\\/.*$";

/***/ }),

/***/ "./src/images/ctn-black.png":
/*!**********************************!*\
  !*** ./src/images/ctn-black.png ***!
  \**********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-black.d5c0d59d.png";

/***/ }),

/***/ "./src/images/ctn-green.png":
/*!**********************************!*\
  !*** ./src/images/ctn-green.png ***!
  \**********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-green.726491b7.png";

/***/ }),

/***/ "./src/images/ctn-lgray.png":
/*!**********************************!*\
  !*** ./src/images/ctn-lgray.png ***!
  \**********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-lgray.95d992b9.png";

/***/ }),

/***/ "./src/images/ctn-purple.png":
/*!***********************************!*\
  !*** ./src/images/ctn-purple.png ***!
  \***********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-purple.f499bcf9.png";

/***/ }),

/***/ "./src/images/ctn-red.png":
/*!********************************!*\
  !*** ./src/images/ctn-red.png ***!
  \********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-red.0445af9f.png";

/***/ }),

/***/ "./src/images/ctn-sea-green.png":
/*!**************************************!*\
  !*** ./src/images/ctn-sea-green.png ***!
  \**************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-sea-green.68c077f4.png";

/***/ }),

/***/ "./src/images/ctn-white.png":
/*!**********************************!*\
  !*** ./src/images/ctn-white.png ***!
  \**********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/ctn-white.72e0592a.png";

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ ((module) => {

"use strict";
module.exports = window["React"];

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

"use strict";
module.exports = window["ReactJSXRuntime"];

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/compose":
/*!*********************************!*\
  !*** external ["wp","compose"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["compose"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "./src/block.json":
/*!************************!*\
  !*** ./src/block.json ***!
  \************************/
/***/ ((module) => {

"use strict";
module.exports = /*#__PURE__*/JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"104digitalpack/section-container","version":"1.0.0","title":"Section Container","category":"theme-blocks","icon":{"src":"<svg xmlns=\\"http://www.w3.org/2000/svg\\" width=\\"60\\" height=\\"60\\" viewBox=\\"0 0 60 60\\" fill=\\"none\\"><path d=\\"M48.8284 -0.602386H10.3845C4.43196 -0.602386 -0.393555 4.15566 -0.393555 10.025V48.7702C-0.393555 54.6396 4.43196 59.3976 10.3845 59.3976H48.8284C54.7809 59.3976 59.6064 54.6396 59.6064 48.7702V10.025C59.6064 4.15566 54.7809 -0.602386 48.8284 -0.602386Z\\" fill=\\"#FCC708\\"/><path d=\\"M40.3262 35.0808C38.9395 35.8702 37.654 36.6025 36.3686 37.3322C33.873 38.7527 31.3722 40.168 28.8818 41.5989C28.5884 41.7677 28.3858 41.7703 28.0898 41.5989C24.262 39.3967 20.4264 37.2076 16.5857 35.0262C16.2818 34.8548 16.1416 34.673 16.1416 34.3043C16.1546 29.4897 16.1546 24.6751 16.1416 19.8631C16.1416 19.5255 16.2481 19.3386 16.5389 19.175C20.4316 16.9702 24.3191 14.7551 28.204 12.5322C28.4611 12.3842 28.6533 12.4024 28.9026 12.5478C32.7875 14.8096 36.6724 17.0663 40.5703 19.3048C40.8949 19.4918 40.9183 19.7151 40.9183 20.019C40.9131 23.2079 40.9287 26.3994 40.9027 29.5884C40.8975 30.0896 41.0403 30.1961 41.5181 30.1883C43.3957 30.1597 45.2758 30.1753 47.1533 30.1753C47.3611 30.1753 47.5714 30.1753 47.8623 30.1753C47.3273 31.5101 46.8183 32.7747 46.3197 34.042C46.2366 34.2524 46.0938 34.2783 45.9068 34.2783C44.1254 34.2783 42.3439 34.2887 40.5651 34.2705C40.0847 34.2653 39.7055 33.92 39.2874 33.7226C38.5629 33.3798 37.867 32.9825 37.1346 32.6579C36.7815 32.5021 36.7062 32.2917 36.7088 31.9386C36.7191 28.7107 36.7088 25.4802 36.7243 22.2523C36.7243 21.8627 36.636 21.616 36.2725 21.4109C33.8236 20.0241 31.3878 18.6166 28.9545 17.1988C28.6663 17.03 28.4585 17.0144 28.1599 17.191C25.6695 18.6634 23.1739 20.1228 20.6653 21.5641C20.3433 21.7485 20.2446 21.9458 20.2472 22.3016C20.2602 25.4724 20.2602 28.6431 20.2472 31.8113C20.2472 32.1645 20.3459 32.3774 20.6575 32.5592C23.1557 34.0186 25.6461 35.4859 28.1287 36.9687C28.4377 37.1531 28.6481 37.1608 28.9623 36.9687C31.1125 35.6521 33.2783 34.364 35.4337 33.0578C35.6856 32.9046 35.8907 32.8111 36.1868 32.9643C37.5216 33.6577 38.8641 34.3329 40.3288 35.0808H40.3262Z\\" fill=\\"black\\"/><path d=\\"M13.6801 40.9153C12.3401 40.022 11.1092 39.1962 9.87571 38.3782C9.62121 38.2094 9.70431 37.9627 9.70431 37.7394C9.69912 33.9427 9.68873 30.1461 9.7147 26.3495C9.7173 25.8016 9.56408 25.6432 9.03432 25.6821C8.41108 25.7289 7.78264 25.6873 7.15679 25.6951C6.88152 25.6977 6.79583 25.625 6.94385 25.3575C7.51776 24.3136 8.08907 23.267 8.64999 22.2127C8.75906 22.0076 8.89669 21.9504 9.11483 21.953C10.5041 21.9608 11.8935 21.9712 13.2828 21.9478C13.7191 21.94 13.6853 22.1816 13.6853 22.4672C13.6853 25.3445 13.6853 28.2219 13.6853 31.0992C13.6853 34.3271 13.6853 37.5524 13.6853 40.9127L13.6801 40.9153Z\\" fill=\\"black\\"/><path d=\\"M52.4125 40.9309C51.379 40.2427 50.483 39.5494 49.4962 39.017C48.6211 38.5444 48.3822 37.9419 48.4004 36.9681C48.4679 33.3922 48.4341 29.8111 48.4185 26.2352C48.4185 25.8094 48.5068 25.6587 48.9613 25.6743C49.9169 25.7055 50.8778 25.6977 51.8334 25.6587C52.2827 25.6406 52.4281 25.7548 52.4255 26.23C52.4047 29.9643 52.4151 33.6986 52.4151 37.4329C52.4151 38.547 52.4151 39.661 52.4151 40.9283L52.4125 40.9309Z\\" fill=\\"black\\"/></svg>"},"description":"Block to Manager Available Sections","supports":{"html":false,"align":["wide","full"]},"attributes":{"bgDesignType":{"type":"string","default":""},"bgWidth":{"type":"string","default":"ctn"},"ctnShape":{"type":"string","default":""},"bgImage":{"type":"object","default":{"title":"","filename":"","url":"","isOverlay":false}}},"textdomain":"section-container","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css"}');

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src;
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) {
/******/ 					var i = scripts.length - 1;
/******/ 					while (i > -1 && (!scriptUrl || !/^http(s?):/.test(scriptUrl))) scriptUrl = scripts[i--].src;
/******/ 				}
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl;
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0,
/******/ 			"./style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk104digitalpack"] = self["webpackChunk104digitalpack"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-index"], () => (__webpack_require__("./src/index.jsx")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map