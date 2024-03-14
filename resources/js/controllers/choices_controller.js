import { Controller } from "@hotwired/stimulus";

import Choices from "choices.js";
import "choices.js/public/assets/styles/choices.css";

// Connects to data-controller="choices"
export default class extends Controller {
    static classes = ["invalid"];
    static values = {
        choices: Array,
        items: Array,
    };

    connect() {
        console.log(this.choicesValue, this.itemsValue);
        const choices = new Choices(this.element, {
            choices: this.choicesValue,
            items: this.itemsValue,
            addItems: true,
            classNames: {
                containerOuter: "choices" + this.invalidClasses.join(" "),
                containerInner: "choices__inner",
                input: "choices__input",
                inputCloned: "choices__input--cloned",
                list: "choices__list",
                listItems: "choices__list--multiple",
                listSingle: "choices__list--single",
                listDropdown: "choices__list--dropdown",
                item: "choices__item",
                itemSelectable: "choices__item--selectable",
                itemDisabled: "choices__item--disabled",
                itemOption: "choices__item--choice",
                group: "choices__group",
                groupHeading: "choices__heading",
                button: "choices__button",
                activeState: "is-active",
                focusState: "is-focused",
                openState: "is-open",
                disabledState: "is-disabled",
                highlightedState: "is-highlighted",
                selectedState: "is-selected",
                flippedState: "is-flipped",
                selectedState: "is-highlighted",
            },
        });
    }
}
