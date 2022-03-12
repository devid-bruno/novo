/*
 * Validator v0.11.9 for Bootstrap 3, by @1000hz
 * Copyright 2017 Cina Saffary
 * Licensed under http://opensource.org/licenses/MIT
 *
 * https://github.com/1000hz/bootstrap-validator
 */
+ function(f) {
    function g(a) {
        return a.is('[type="checkbox"]') ? a.prop("checked") : a.is('[type="radio"]') ? !!f('[name="' + a.attr("name") + '"]:checked').length : a.is("select[multiple]") ? (a.val() || []).length : a.val()
    }

    function h(a) {
        return this.each(function() {
            var b = f(this),
                d = f.extend({}, i.DEFAULTS, b.data(), "object" == typeof a && a),
                k = b.data("bs.validator");
            (k || "destroy" != a) && (k || b.data("bs.validator", k = new i(this, d)), "string" == typeof a && k[a]())
        })
    }
    var i = function(a, b) {
        this.options = b, this.validators = f.extend({}, i.VALIDATORS, b.custom), this.$element = f(a), this.$btn = f('button[type="submit"], input[type="submit"]').filter('[form="' + this.$element.attr("id") + '"]').add(this.$element.find('input[type="submit"], button[type="submit"]')), this.update(), this.$element.on("input.bs.validator change.bs.validator focusout.bs.validator", f.proxy(this.onInput, this)), this.$element.on("submit.bs.validator", f.proxy(this.onSubmit, this)), this.$element.on("reset.bs.validator", f.proxy(this.reset, this)), this.$element.find("[data-match]").each(function() {
            var e = f(this),
                k = e.attr("data-match");
            f(k).on("input.bs.validator", function() {
                g(e) && e.trigger("input.bs.validator")
            })
        }), this.$inputs.filter(function() {
            return g(f(this)) && !f(this).closest(".has-error").length
        }).trigger("focusout"), this.$element.attr("novalidate", !0)
    };
    i.VERSION = "0.11.9", i.INPUT_SELECTOR = ':input:not([type="hidden"], [type="submit"], [type="reset"], button)', i.FOCUS_OFFSET = 20, i.DEFAULTS = {
        delay: 500,
        html: !1,
        disable: !0,
        focus: !0,
        custom: {},
        errors: {
            match: "Does not match",
            minlength: "Not long enough"
        },
        feedback: {
            success: "glyphicon-ok",
            error: "glyphicon-remove"
        }
    }, i.VALIDATORS = {
        "native": function(c) {
            var d = c[0];
            return d.checkValidity ? !d.checkValidity() && !d.validity.valid && (d.validationMessage || "error!") : void 0
        },
        match: function(a) {
            var d = a.attr("data-match");
            return a.val() !== f(d).val() && i.DEFAULTS.errors.match
        },
        minlength: function(c) {
            var d = c.attr("data-minlength");
            return c.val().length < d && i.DEFAULTS.errors.minlength
        }
    }, i.prototype.update = function() {
        var a = this;
        return this.$inputs = this.$element.find(i.INPUT_SELECTOR).add(this.$element.find('[data-validate="true"]')).not(this.$element.find('[data-validate="false"]').each(function() {
            a.clearErrors(f(this))
        })), this.toggleSubmit(), this
    }, i.prototype.onInput = function(a) {
        var k = this,
            l = f(a.target),
            m = "focusout" !== a.type;
        this.$inputs.is(l) && this.validateInput(l, m).done(function() {
            k.toggleSubmit()
        })
    }, i.prototype.validateInput = function(a, b) {
        var k = (g(a), a.data("bs.validator.errors"));
        a.is('[type="radio"]') && (a = this.$element.find('input[name="' + a.attr("name") + '"]'));
        var l = f.Event("validate.bs.validator", {
            relatedTarget: a[0]
        });
        if (this.$element.trigger(l), !l.isDefaultPrevented()) {
            var m = this;
            return this.runValidators(a).done(function(c) {
                a.data("bs.validator.errors", c), c.length ? b ? m.defer(a, m.showErrors) : m.showErrors(a) : m.clearErrors(a), k && c.toString() === k.toString() || (l = c.length ? f.Event("invalid.bs.validator", {
                    relatedTarget: a[0],
                    detail: c
                }) : f.Event("valid.bs.validator", {
                    relatedTarget: a[0],
                    detail: k
                }), m.$element.trigger(l)), m.toggleSubmit(), m.$element.trigger(f.Event("validated.bs.validator", {
                    relatedTarget: a[0]
                }))
            })
        }
    }, i.prototype.runValidators = function(a) {
        function b(c) {
            return a.attr("data-" + c + "-error")
        }

        function k() {
            var c = a[0].validity;
            return c.typeMismatch ? a.attr("data-type-error") : c.patternMismatch ? a.attr("data-pattern-error") : c.stepMismatch ? a.attr("data-step-error") : c.rangeOverflow ? a.attr("data-max-error") : c.rangeUnderflow ? a.attr("data-min-error") : c.valueMissing ? a.attr("data-required-error") : null
        }

        function l() {
            return a.attr("data-error")
        }

        function m(c) {
            return b(c) || k() || l()
        }
        var n = [],
            o = f.Deferred();
        return a.data("bs.validator.deferred") && a.data("bs.validator.deferred").reject(), a.data("bs.validator.deferred", o), f.each(this.validators, f.proxy(function(c, p) {
            var q = null;
            !g(a) && !a.attr("required") || void 0 === a.attr("data-" + c) && "native" != c || !(q = p.call(this, a)) || (q = m(c) || q, !~n.indexOf(q) && n.push(q))
        }, this)), !n.length && g(a) && a.attr("data-remote") ? this.defer(a, function() {
            var c = {};
            c[a.attr("name")] = g(a), f.get(a.attr("data-remote"), c).fail(function(d, e, p) {
                n.push(m("remote") || p)
            }).always(function() {
                o.resolve(n)
            })
        }) : o.resolve(n), o.promise()
    }, i.prototype.validate = function() {
        var a = this;
        return f.when(this.$inputs.map(function() {
            return a.validateInput(f(this), !1)
        })).then(function() {
            a.toggleSubmit(), a.focusError()
        }), this
    }, i.prototype.focusError = function() {
        if (this.options.focus) {
            var a = this.$element.find(".has-error :input:first");
            0 !== a.length && (f("html, body").animate({
                scrollTop: a.offset().top - i.FOCUS_OFFSET
            }, 250), a.focus())
        }
    }, i.prototype.showErrors = function(a) {
        var k = this.options.html ? "html" : "text",
            l = a.data("bs.validator.errors"),
            m = a.closest(".form-group"),
            n = m.find(".help-block.with-errors"),
            o = m.find(".form-control-feedback");
        l.length && (l = f("<ul/>").addClass("list-unstyled").append(f.map(l, function(c) {
            return f("<li/>")[k](c)
        })), void 0 === n.data("bs.validator.originalContent") && n.data("bs.validator.originalContent", n.html()), n.empty().append(l), m.addClass("has-error has-danger"), m.hasClass("has-feedback") && o.removeClass(this.options.feedback.success) && o.addClass(this.options.feedback.error) && m.removeClass("has-success"))
    }, i.prototype.clearErrors = function(b) {
        var k = b.closest(".form-group"),
            l = k.find(".help-block.with-errors"),
            m = k.find(".form-control-feedback");
        l.html(l.data("bs.validator.originalContent")), k.removeClass("has-error has-danger has-success"), k.hasClass("has-feedback") && m.removeClass(this.options.feedback.error) && m.removeClass(this.options.feedback.success) && g(b) && m.addClass(this.options.feedback.success) && k.addClass("has-success")
    }, i.prototype.hasErrors = function() {
        function a() {
            return !!(f(this).data("bs.validator.errors") || []).length
        }
        return !!this.$inputs.filter(a).length
    }, i.prototype.isIncomplete = function() {
        function a() {
            var b = g(f(this));
            return !("string" == typeof b ? f.trim(b) : b)
        }
        return !!this.$inputs.filter("[required]").filter(a).length
    }, i.prototype.onSubmit = function(b) {
        this.validate(), (this.isIncomplete() || this.hasErrors()) && b.preventDefault()
    }, i.prototype.toggleSubmit = function() {
        this.options.disable && this.$btn.toggleClass("disabled", this.isIncomplete() || this.hasErrors())
    }, i.prototype.defer = function(a, d) {
        return d = f.proxy(d, this, a), this.options.delay ? (window.clearTimeout(a.data("bs.validator.timeout")), void a.data("bs.validator.timeout", window.setTimeout(d, this.options.delay))) : d()
    }, i.prototype.reset = function() {
        return this.$element.find(".form-control-feedback").removeClass(this.options.feedback.error).removeClass(this.options.feedback.success), this.$inputs.removeData(["bs.validator.errors", "bs.validator.deferred"]).each(function() {
            var a = f(this),
                d = a.data("bs.validator.timeout");
            window.clearTimeout(d) && a.removeData("bs.validator.timeout")
        }), this.$element.find(".help-block.with-errors").each(function() {
            var a = f(this),
                d = a.data("bs.validator.originalContent");
            a.removeData("bs.validator.originalContent").html(d)
        }), this.$btn.removeClass("disabled"), this.$element.find(".has-error, .has-danger, .has-success").removeClass("has-error has-danger has-success"), this
    }, i.prototype.destroy = function() {
        return this.reset(), this.$element.removeAttr("novalidate").removeData("bs.validator").off(".bs.validator"), this.$inputs.off(".bs.validator"), this.options = null, this.validators = null, this.$element = null, this.$btn = null, this.$inputs = null, this
    };
    var j = f.fn.validator;
    f.fn.validator = h, f.fn.validator.Constructor = i, f.fn.validator.noConflict = function() {
        return f.fn.validator = j, this
    }, f(window).on("load", function() {
        f('form[data-toggle="validator"]').each(function() {
            var a = f(this);
            h.call(a, a.data())
        })
    })
}(jQuery);