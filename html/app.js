(function ($) {

    var LanguageSwitcher = function(rootElement) {
      this.$root = $(rootElement)
      this.$labelRoot = this.$root.find('.label-wrapper')
      this.$selectRoot = this.$root.find('.select-wrapper')

      this._labels = this.$selectRoot.find('select option')
        .map(function(index, element) {
            return {
              "id": $(element).val(),
              "text": $(element).text()
            }
        })
        .toArray()

      this._value = this.$selectRoot.find('select option:selected').text()
      this._id = this.$selectRoot.find('select option:selected').val()
      this._isOpen = false

      this._initLabels()


    } 

    LanguageSwitcher.prototype = {
      clickLabel: function(event) {
        if (!this._isOpen) {
          this._open()
        } else {
          this._updateValue(event)
          this._close()
        }
      },

      _initLabels: function() {

        var $labelRoot = this.$labelRoot

        $labelRoot.empty()
        $labelRoot.append("<div data-id=" + this._id +" class=\"label currentValue\">" + this._value + "</div>")

        this._labels.map(function(label, index) {
            $labelRoot.append("<div data-id=" + label.id +" class=\"label\">" + label.text + "</div>")
        })

      },

      _open: function() {
        this.$root.addClass('opened')
        this._isOpen = true
      },

      _close: function() {
        this.$root.removeClass('opened')
        this._isOpen = false
      },

      _updateValue: function(event) {
        this._value = $(event.currentTarget).text()
        this._id = $(event.currentTarget).data('id')

        this.$labelRoot.find('.currentValue').text(this._value);
        this.$selectRoot.find('select').val(this._id);
      }
    }

    var ls = new LanguageSwitcher('.languages-switcher')

    $('.languages-switcher .label').on('click', function(event) {
        event.preventDefault
        ls.clickLabel(event)
    })


})(jQuery)
