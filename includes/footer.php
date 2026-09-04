<?php if (!isset($bp)) { $bp = isset($basePath) ? $basePath : ""; } ?>
</main>

  <!-- Contact band before footer -->
  <section class="footer-contact-section" id="contact-section">
    <div class="container">
      <div class="footer-contact-grid">
        <div>
          <div class="footer-contact-heading" data-i18n="contact_title">Get in touch</div>
          <p style="margin:0 0 1rem;max-width:28rem">Talk to our team about Official WhatsApp Business API, automation and omnichannel setup for your business.</p>
          <div class="footer-address">
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>HelloBotz AI Technologies Pvt Ltd<br>Head Office — Bangalore, India</span>
            </div>
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              <span><a href="https://wa.me/919638911838" target="_blank" rel="noopener">+91 96389 11838</a> · WhatsApp</span>
            </div>
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
              <span><a href="mailto:hello@hellobotz.com">hello@hellobotz.com</a></span>
            </div>
          </div>
          <div class="footer-app-download" style="margin-top:1.25rem">
            <strong style="display:block;margin-bottom:.65rem">Download HelloBotz App</strong>
            <div style="display:flex;flex-wrap:wrap;gap:.65rem">
              <a class="btn btn-sm btn-outline" href="/resources/download-ios-app/"> App Store</a>
              <a class="btn btn-sm btn-outline" href="/resources/download-app/">▶ Google Play</a>
            </div>

          <div class="footer-meta-partner">
            <img src="/assets/images/partners/meta-tech-partner.png" alt="Meta Tech Partner" width="120" height="56"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
            <div class="meta-ph" style="display:none">Meta<br>Tech Partner</div>
            <div>
              <strong style="display:block;font-size:.9rem;color:#111">Meta Tech Partner</strong>
              <span style="font-size:.8rem;color:#6B7280">Official WhatsApp Business API solutions</span>
            </div>
          </div>
          </div>
        </div>
        <div>
          <div class="footer-contact-heading" data-i18n="contact_form_title">Send a message</div>
          <form class="footer-contact-form" action="javascript:void(0)" method="post" id="footer-contact-form" novalidate>
            <div class="form-group">
              <label class="form-label" for="fc-name">Name</label>
              <input type="text" class="form-input" id="fc-name" name="name" required placeholder="Your name">
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-mobile">Mobile</label>
              <input type="tel" class="form-input" id="fc-mobile" name="mobile" required placeholder="+91 98765 43210">
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-regarding">Regarding</label>
              <select class="form-input" id="fc-regarding" name="regarding" required>
                <option value="">Select topic</option>
                <option value="WhatsApp Business API">WhatsApp Business API</option>
                <option value="Omnichannel Platform">Omnichannel Platform</option>
                <option value="Pricing / Plans">Pricing / Plans</option>
                <option value="Affiliate / Partner">Affiliate / Partner</option>
                <option value="Technical Support">Technical Support</option>
                <option value="Demo Request">Demo Request</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-message">Message</label>
              <textarea class="form-input" id="fc-message" name="message" rows="3" required placeholder="How can we help?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?php echo $bp; ?>" class="logo" aria-label="HelloBotz Home">
            <img src="<?php echo $bp; ?>assets/images/logo-footer.png" alt="HelloBotz - WhatsApp API Platform" class="logo-img" width="140" height="36" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-flex'">
            <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
              <span class="logo-icon"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></span>
              <span style="font-weight:800;color:#fff">HelloBotz</span>
            </span>
          </a>
          <p>AI Powered WhatsApp Business API &amp; Omnichannel Platform. Official Meta API, shared inbox, automation, broadcasts and integrations.</p>
          <button type="button" class="btn btn-primary btn-sm btn-callback-open">Request Callback</button>
        </div>
        <div class="footer-col">
          <div class="footer-heading">Products</div>
          <ul>
            <li><a href="<?php echo $bp; ?>products/whatsapp-api">WhatsApp Business API</a></li>
            <li><a href="<?php echo $bp; ?>products/shared-inbox">Shared Team Inbox</a></li>
            <li><a href="<?php echo $bp; ?>products/broadcast">Broadcast Campaigns</a></li>
            <li><a href="<?php echo $bp; ?>products/flow-builder">Flow Builder</a></li>
            <li><a href="<?php echo $bp; ?>products/chatbot">WhatsApp Chatbot</a></li>
            <li><a href="<?php echo $bp; ?>products/crm">WhatsApp CRM</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-heading">Solutions</div>
          <ul>
            <li><a href="<?php echo $bp; ?>solutions/sales">Sales on WhatsApp</a></li>
            <li><a href="<?php echo $bp; ?>solutions/customer-support">Customer Support</a></li>
            <li><a href="<?php echo $bp; ?>solutions/lead-generation">Lead Generation</a></li>
            <li><a href="<?php echo $bp; ?>industries/ecommerce">E-commerce Solutions</a></li>
            <li><a href="/pricing/">Pricing Plans</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-heading">Integrations</div>
          <ul>
            <li><a href="<?php echo $bp; ?>integrations/shopify">Shopify Integration</a></li>
            <li><a href="<?php echo $bp; ?>integrations/woocommerce">WooCommerce Integration</a></li>
            <li><a href="<?php echo $bp; ?>integrations/google-calendar">Google Workspace</a></li>
            <li><a href="<?php echo $bp; ?>integrations/webhooks">Webhooks &amp; API</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-heading">Company</div>
          <ul>
            <li><a href="<?php echo $bp; ?>company/about/">About HelloBotz</a></li>
            <li><a href="/contact/">Contact Us</a></li>
            <li><a href="<?php echo $bp; ?>Partners">Partner Program</a></li>
            <li><a href="/resources/blog/">Blog &amp; Resources</a></li>
            <li><a href="/resources/help-center/">Help Center</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> HelloBotz AI Technologies Pvt Ltd. All rights reserved.</p>
        <div class="footer-legal">
          <a href="/privacy/">Privacy Policy</a>
          <a href="/terms/">Terms of Service</a>
          <a href="/security/">Security</a>
          <a href="/cookie-policy/">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <?php include __DIR__ . '/whatsapp-widget.php'; ?>
  <?php include __DIR__ . '/demo-popup.php'; ?>
  <?php include __DIR__ . '/callback-popup.php'; ?>
  <?php include __DIR__ . '/offer-popup.php'; ?>
  <script src="/i18n.js?v=22" defer></script>
  <script src="/main.js?v=38" defer></script>

<script src="/assets/js/mobile-menu.js?v=38"></script>

  <script src="/forms.js?v=22" defer></script>
</body>
</html>
