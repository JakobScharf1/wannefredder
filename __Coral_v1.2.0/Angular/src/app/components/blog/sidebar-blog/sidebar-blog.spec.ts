import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SidebarBlog } from './sidebar-blog';

describe('SidebarBlog', () => {
  let component: SidebarBlog;
  let fixture: ComponentFixture<SidebarBlog>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SidebarBlog]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SidebarBlog);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
