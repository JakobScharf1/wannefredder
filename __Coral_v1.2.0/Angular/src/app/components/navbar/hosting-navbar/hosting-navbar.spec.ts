import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HostingNavbar } from './hosting-navbar';

describe('HostingNavbar', () => {
  let component: HostingNavbar;
  let fixture: ComponentFixture<HostingNavbar>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [HostingNavbar]
    })
    .compileComponents();

    fixture = TestBed.createComponent(HostingNavbar);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
