/* =============================================
   SAVIO Prototype - JavaScript
   ============================================= */

document.addEventListener('DOMContentLoaded', function() {
  // DOM Elements
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');
  const sidebarOverlay = document.getElementById('sidebarOverlay');
  const themeToggle = document.getElementById('themeToggle');
  const searchBox = document.getElementById('searchBox');
  const searchInput = document.getElementById('searchInput');
  const searchModal = document.getElementById('searchModal');
  const modalSearchInput = document.getElementById('modalSearchInput');
  const closeModal = document.getElementById('closeModal');
  const expandAllBtn = document.getElementById('expandAll');
  const collapseAllBtn = document.getElementById('collapseAll');
  const weekHeaders = document.querySelectorAll('.week-header');
  const filterBtns = document.querySelectorAll('.filter-btn');
  const weekSections = document.querySelectorAll('.week-section');
  const weekLinks = document.querySelectorAll('.week-link');

  // =============================================
  // Theme Management
  // =============================================
  function initTheme() {
    const savedTheme = localStorage.getItem('savio-theme');
    if (savedTheme) {
      document.documentElement.setAttribute('data-theme', savedTheme);
    } else if (window.matchMedia('(prefers-color-scheme: light)').matches) {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  }

  function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('savio-theme', newTheme);
  }

  initTheme();
  themeToggle.addEventListener('click', toggleTheme);

  // =============================================
  // Mobile Sidebar
  // =============================================
  function openSidebar() {
    sidebar.classList.add('open');
    sidebarOverlay.classList.add('visible');
    document.body.style.overflow = 'hidden';
  }

  function closeSidebar() {
    sidebar.classList.remove('open');
    sidebarOverlay.classList.remove('visible');
    document.body.style.overflow = '';
  }

  menuToggle.addEventListener('click', openSidebar);
  sidebarOverlay.addEventListener('click', closeSidebar);

  // Close sidebar on escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && sidebar.classList.contains('open')) {
      closeSidebar();
    }
  });

  // =============================================
  // Search Modal
  // =============================================
  function openSearchModal() {
    searchModal.classList.add('visible');
    modalSearchInput.focus();
    document.body.style.overflow = 'hidden';
  }

  function closeSearchModal() {
    searchModal.classList.remove('visible');
    document.body.style.overflow = '';
    modalSearchInput.value = '';
  }

  searchBox.addEventListener('click', openSearchModal);
  searchInput.addEventListener('focus', openSearchModal);
  closeModal.addEventListener('click', closeSearchModal);

  // Close modal when clicking overlay
  searchModal.addEventListener('click', function(e) {
    if (e.target === searchModal) {
      closeSearchModal();
    }
  });

  // Keyboard shortcuts
  document.addEventListener('keydown', function(e) {
    // Ctrl+K or Cmd+K to open search
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
      e.preventDefault();
      openSearchModal();
    }
    // Escape to close modal
    if (e.key === 'Escape' && searchModal.classList.contains('visible')) {
      closeSearchModal();
    }
  });

  // Modal filter buttons
  const modalFilters = document.querySelectorAll('.modal-filter');
  modalFilters.forEach(function(btn) {
    btn.addEventListener('click', function() {
      modalFilters.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
    });
  });

  // =============================================
  // Week Sections - Expand/Collapse
  // =============================================
  function toggleWeekSection(header) {
    const isExpanded = header.classList.contains('expanded');
    const content = header.nextElementSibling;

    if (isExpanded) {
      header.classList.remove('expanded');
      header.setAttribute('aria-expanded', 'false');
      content.classList.remove('expanded');
    } else {
      header.classList.add('expanded');
      header.setAttribute('aria-expanded', 'true');
      content.classList.add('expanded');
    }
  }

  weekHeaders.forEach(function(header) {
    header.addEventListener('click', function() {
      toggleWeekSection(header);
    });
  });

  // Expand All
  expandAllBtn.addEventListener('click', function() {
    weekHeaders.forEach(function(header) {
      header.classList.add('expanded');
      header.setAttribute('aria-expanded', 'true');
      header.nextElementSibling.classList.add('expanded');
    });
  });

  // Collapse All
  collapseAllBtn.addEventListener('click', function() {
    weekHeaders.forEach(function(header) {
      header.classList.remove('expanded');
      header.setAttribute('aria-expanded', 'false');
      header.nextElementSibling.classList.remove('expanded');
    });
  });

  // =============================================
  // Week Filter
  // =============================================
  function filterWeeks(filter) {
    weekSections.forEach(function(section) {
      const week = section.getAttribute('data-week');
      
      if (filter === 'all') {
        section.style.display = '';
      } else if (week === filter || week === 'general') {
        section.style.display = '';
      } else {
        section.style.display = 'none';
      }
    });
  }

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      // Update active state
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');

      // Filter weeks
      const filter = btn.getAttribute('data-filter');
      filterWeeks(filter);

      // Expand the filtered week if it's a specific week
      if (filter !== 'all') {
        const targetSection = document.querySelector('.week-section[data-week="' + filter + '"]');
        if (targetSection) {
          const header = targetSection.querySelector('.week-header');
          if (!header.classList.contains('expanded')) {
            toggleWeekSection(header);
          }
        }
      }
    });
  });

  // =============================================
  // Sidebar Week Navigation
  // =============================================
  weekLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      const week = link.getAttribute('data-week');
      
      // Update active state
      weekLinks.forEach(function(l) { l.classList.remove('active'); });
      link.classList.add('active');

      // Update filter buttons
      filterBtns.forEach(function(btn) {
        if (btn.getAttribute('data-filter') === week) {
          btn.click();
        }
      });

      // Close sidebar on mobile
      if (window.innerWidth <= 1024) {
        closeSidebar();
      }

      // Scroll to week section
      const targetSection = document.querySelector('.week-section[data-week="' + week + '"]');
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // =============================================
  // Activity Items - Click Handler
  // =============================================
  const activityItems = document.querySelectorAll('.activity-item-content');
  activityItems.forEach(function(item) {
    item.style.cursor = 'pointer';
    item.addEventListener('click', function() {
      // In a real app, this would navigate to the activity detail page
      const title = item.querySelector('h4').textContent;
      console.log('Navigating to:', title);
    });
  });

  // =============================================
  // Notifications (Demo)
  // =============================================
  const notificationBtn = document.querySelector('.notification-btn');
  notificationBtn.addEventListener('click', function() {
    alert('Tienes 3 notificaciones nuevas:\n\n1. Nueva calificación disponible\n2. Recordatorio: Entrega en 2 días\n3. Nuevo aviso del profesor');
  });

  // =============================================
  // User Menu (Demo)
  // =============================================
  const userMenu = document.getElementById('userMenu');
  userMenu.addEventListener('click', function() {
    const options = [
      'Mi Perfil',
      'Configuración',
      'Mis Calificaciones',
      'Cerrar Sesión'
    ];
    const choice = prompt('Menú de Usuario:\n\n1. ' + options.join('\n2. ').replace(/\n2\. /g, function(_, i) { return '\n' + (i + 2) + '. '; }));
  });

  // =============================================
  // Responsive Handling
  // =============================================
  let resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      if (window.innerWidth > 1024) {
        closeSidebar();
      }
    }, 250);
  });

  // =============================================
  // Initialize - Expand Current Week
  // =============================================
  const currentWeekHeader = document.querySelector('.week-section.current .week-header');
  if (currentWeekHeader && !currentWeekHeader.classList.contains('expanded')) {
    // Already expanded via HTML, but ensure it's set up correctly
  }

  console.log('SAVIO Prototype loaded successfully!');
});
